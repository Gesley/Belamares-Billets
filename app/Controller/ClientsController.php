<?php 

class ClientsController extends AppController {

    public $name = 'Clients';
    public $components = array('Paginator', 'RequestHandler');


    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $options = array(
            'fields' => array('Client.id', 'Client.name', 'Client.cpf', 'Client.created'),
            //'conditions' => array('Noticia.active' => true),

            'order' => array('Client.name' => 'ASC'),
            'limit' => 20
        );

        $this->paginate = $options;

        // Roda a consulta, já trazendo os resultados paginados
        $clients = $this->paginate('Client');

        // Envia os dados pra view
        $this->set('clients', $clients);

    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Client->create();
            if ($this->Client->save($this->request->data)) {
                $this->Session->setFlash(__('
                        <div class="alert alert-success"><b>CLIENTE SALVO COM SUCESSO.</b></div>
                    '));
                $this->redirect(array('action' => 'add'));
            } else {
                $this->Session->setFlash(__('<div class="alert alert-danger"><b>O CLIENTE NÃO PODE SER SALVO. TENTE NOVAMENTE.</b></div>'));
            }
        }
    }

    public function find() {

        $this->Client->recursive = -1;
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            $results = $this->Client->find('all', array(
                'fields' => array('Client.id', 'Client.name'),
                //remove the leading '%' if you want to restrict the matches more
                'conditions' => array('Client.name LIKE ' => '%' . $this->request->query['q'] . '%')
        ));
        

        $arrResults = array();

        foreach($results as $result) {
        	$arrResults = array(
        		'clients' => array (
        					'nome' => $result['Client']['name'],
        					'id' => $result['Client']['id']
          			)
        		);            
        }
     
        print json_encode($arrResults);

        } else {
            //if the form wasn't submitted with JavaScript
            //set a session variable with the search term in and redirect to index page
            $this->Session->write('clientName',$this->request->data['Client']['name']);
            $this->redirect(array('action' => 'index'));
        }
    }    
  
}