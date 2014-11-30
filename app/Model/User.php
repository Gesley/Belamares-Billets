<?php 

App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
    public $name = 'User';

    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Favor Informar um nome de usuário'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Favor informar uma senha'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'usuario')),
                'message' => 'Favor informar um perfil',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
    
}

