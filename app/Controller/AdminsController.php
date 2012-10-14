<?php
    App::uses('AppController', 'Controller');

    class AdminsController extends AppController{
        public $uses = array('User');
        public function index(){
            $this->User->recursive = 0;
            $this->set('users', $this->paginate());
        }

    }
?>
