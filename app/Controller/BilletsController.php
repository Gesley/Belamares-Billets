<?php 

class BilletsController extends AppController {


    public function beforeFilter() {
        $this->Auth->allow('find');
    }   

    /** 
     * Adiciona um Boleto para um cliente
     * @access public 
    */  
    public function add() {
		if ($this->request->is('post')) {

			$file = $this->request->data['Billet']['archivepdf'];
			$extesion = pathinfo($file['name'], PATHINFO_EXTENSION);
			
			if( $extesion != 'pdf') {
				$this->Session->setFlash(__('<div class="alert alert-danger">Somente arquivos do tipo PDF podem ser enviados.</div>'));
				$this->redirect(array('action' => 'add')); 
			}

			$dir = WWW_ROOT.$dir."files".DS;  
  
		    if(($file['error']!=0) and ($file['size']==0)) {  
		        $this->Session->setFlash(__('<div class="alert alert-danger">Ocorreu um erro. Tente gerar um novo boleto e tente enviar novamente..</div>'));
				$this->redirect(array('action' => 'add'));  
		    }  

		    // chega se a pasta existe se não cria
		    $this->checa_dir($dir);  
		    // verifica nome de arquivos com caracteres e trata para nome
		    $file = $this->checa_nome($file, $dir);  
		    // move file
		    $this->move_arquivos($file, $dir);

		    $clientData = array(
	        	'Billet' => array(
	        		'archivename' => $file['name'],
	        		'id_client' => $this->request->data['Billet']['clientcod']
	        		)
	        );	   

	            $this->Billet->create();
	            if ($this->Billet->save( $clientData )) {
	                $this->Session->setFlash(__('
	                        <div class="alert alert-success"><b>BOLETO SALVO COM SUCESSO.</b></div>
	                    '));
	                $this->redirect(array('action' => 'add'));
	            } else {
	                $this->Session->setFlash(__('<div class="alert alert-danger"><b>O BOLETO NÃO PODE SER SALVO. TENTE NOVAMENTE.</b></div>'));
	            }
		}    	
    }

    /** 
     * Exibe os boletos de um cliente caso seja informado o cpf
     * @access public 
    */       
    public function find() {
    	$this->loadModel('Client');
    	
    	if ( $this->request->is('ajax') ) {
            $this->autoRender = false;
            $result = $this->Client->getClientBillet($this->request->data['cpfcode']);
            print json_encode($result);
        }
    }

    /** 
     * Verifica se o diretório existe, se não ele cria. 
     * @access public 
     * @param Array $file 
     * @param String $data 
    */   
    public function checa_dir($dir)  
    {  
        App::uses('Folder', 'Utility');  
        $folder = new Folder();  
        if (!is_dir($dir)){  
            $folder->create($dir);  
        }  
    }  
      
    /** 
     * Verifica se o nome do arquivo já existe, se existir adiciona um numero ao nome e verifica novamente 
     * @access public 
     * @param Array $file 
     * @param String $data 
     * @return nome da imagem 
    */   
    public function checa_nome($file, $dir)  
    {  
        $file_info = pathinfo($dir.$file['name']);  
        $file_nome = $this->trata_nome($file_info['filename']).'.'.$file_info['extension'];  
        debug($file_nome);  
        $conta = 2;  
        while (file_exists($dir.$file_nome)) {  
            $file_nome  = $this->trata_nome($file_info['filename']).'-'.$conta;  
            $file_nome .= '.'.$file_info['extension'];  
            $conta++;  
            debug($file_nome);  
        }  
        $file['name'] = $file_nome;  
        return $file;  
    }  
      
    /** 
     * Trata o nome removendo espaços, acentos e caracteres em maiúsculo. 
     * @access public 
     * @param Array $file 
     * @param String $data 
    */   
    public function trata_nome($file_nome)  
    {  
        $file_nome = strtolower(Inflector::slug("boleto_".date('dmY-hms'),'-'));  
        return $file_nome;  
    }  
      
    /** 
     * Move o arquivo para a pasta de destino. 
     * @access public 
     * @param Array $file 
     * @param String $data 
    */   
    public function move_arquivos($file, $dir)  
    {  
        App::uses('File', 'Utility');  
        $arquivo = new File($file['tmp_name']);  
        $arquivo->copy($dir.$file['name']);  
        $arquivo->close();  
    }      
  
}