<?php
App::uses('AppController', 'Controller');
/**
* Manuals Controller
*
* @property Manual $Manual
*/
class ManualsController extends AppController {

    /**
    * index method
    *
    * @return void
    */
    public function index() {
        $this->Manual->recursive = 0;
        $this->set('manuals', $this->paginate());
    }

    /**
    * view method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function view($id = null) {
        $this->Manual->id = $id;
        if (!$this->Manual->exists()) {
            throw new NotFoundException(__('Invalid manual'));
        }
        $this->set('manual', $this->Manual->read(null, $id));
    }

    /**
    * add method
    *
    * @return void
    */
    public function add() {
        if ($this->request->is('post')) {


            // Move plan file
            $plan_folder = null;

            // Elem path
            if($this->request->data["Manual"]["path"]["name"]){

                $destination_path = realpath("files/Manuals");

                // Folder
                $folder = '/files/Manuals/'; 

                // File name
                $name = date('YmdHis') . "_" . $this->request->data["Manual"]["path"]["name"];

                // File path 
                $plan_folder = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $this->request->data["Manual"]["path"]["tmp_name"];

                move_uploaded_file($files, $target_path);
            }

            $this->request->data["Manual"]["path"] = $plan_folder;


            $this->Manual->create();
            if ($this->Manual->save($this->request->data)) {
                $this->Session->setFlash(__('The manual has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The manual could not be saved. Please, try again.'));
            }
        }
    }

    /**
    * edit method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        $this->Manual->id = $id;
        if (!$this->Manual->exists()) {
            throw new NotFoundException(__('Invalid manual'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {

            // Move plan file
            $plan_folder = null;

            // Elem path
            if($this->request->data["Manual"]["path"]["name"]){

                $destination_path = realpath("files/Manuals");

                // Folder
                $folder = '/files/Manuals/'; 

                // File name
                $name = date('YmdHis') . "_" . $this->request->data["Manual"]["path"]["name"];

                // File path 
                $plan_folder = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $this->request->data["Manual"]["path"]["tmp_name"];

                move_uploaded_file($files, $target_path);
            }

            $this->request->data["Manual"]["path"] = $plan_folder;

            if ($this->Manual->save($this->request->data)) {
                $this->Session->setFlash(__('The manual has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The manual could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Manual->read(null, $id);
        }
    }

    /**
    * delete method
    *
    * @throws MethodNotAllowedException
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Manual->id = $id;
        if (!$this->Manual->exists()) {
            throw new NotFoundException(__('Invalid manual'));
        }
        if ($this->Manual->delete()) {
            $this->Session->setFlash(__('Manual deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Manual was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
