<?php 

App::uses('AuthComponent', 'Controller/Component');

class Billet extends AppModel {
    public $name = 'Billet';

    public $validate = array(
        'archivename' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Favor selecionar um boleto no formato PDF'
            )        
        ),
        'archivepdf' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Favor selecionar um boleto no formato PDF'
            )        
        ),
    ); 
}

