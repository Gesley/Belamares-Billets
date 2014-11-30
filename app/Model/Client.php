<?php 

App::uses('AuthComponent', 'Controller/Component');

class Client extends AppModel {
    public $name = 'Client';

    public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Favor Informar um nome para o cliente'
            )
        ),
        'cpf' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Favor informar um cpf para o cliente'
            )
        ),
    );

    public function getClientsName ($term = null) {
      if(!empty($term)) {
        $clients = $this->find('list', array(
          'conditions' => array(
            'name LIKE' => trim($term) . '%'
          )
        ));
        return $clients;
      }
      return false;
    } 

    public function getClientBillet($cpf)
    {
        return $this->query("
            SELECT 
            b.id as cod,
            b.archivename,
            DATE_FORMAT(b.created,'%m/%d/%Y as %h:%m:%s') as created,
            c.name
            FROM billets b 
            INNER JOIN clients c ON 
            b.id_client = c.id
            where c.cpf = '$cpf'
            ");
    }   
    
}

