<?php 

class UsersController extends AppController {


    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        
        // Verifica se o usuário é do tipo administrador
        if( $this->Auth->user('role') == 'usuario' ) {
            $this->Session->setFlash(__('<div class="alert alert-danger">Somente um administrador pode inserir usuários</div>'));
            $this->redirect(array( 'controller' => 'billets', 'action' => 'add'));
        } 

        $this->set('users', $this->User->find('all'));
        $options = array(
            'fields' => array('User.id', 'User.username', 'User.created'),
            'order' => array('User.created' => 'DESC'),
            'limit' => 20
        );

        $this->paginate = $options;

        // Roda a consulta, já trazendo os resultados paginados
        $users = $this->paginate('User');

        // Envia os dados pra view
        $this->set('users', $users);
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('<div class="alert alert-danger">Usuário inválido</div>'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if( $this->Auth->user('role') == 'usuario' ) {
            $this->Session->setFlash(__('<div class="alert alert-danger">Somente um administrador pode inserir usuários</div><div class="alert alert-danger">'));
            $this->redirect(array('action' => 'index'));
        }   
        
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success">O usuário foi salvo</div>'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('<div class="alert alert-danger">O usuário não pode ser salvo. Tente novamente.</div>'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuário inválido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success">O usuário foi salvo.</div>'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('<div class="alert alert-danger">O usuário não pode ser salvo. Tente novamente.</div>'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('<div class="alert alert-danger">Usuário inválido</div>'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('<div class="alert alert-success">Usuário deletado</div>'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('<div class="alert alert-danger">Usuário não deletado</div>'));
        $this->redirect(array('action' => 'index'));
    }

    public function login() {

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('<div class="alert alert-danger">Usuário ou senha inválido</div>'));
            }            
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }    
}