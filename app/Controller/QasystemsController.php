<?php
App::uses('AppController', 'Controller');
/**
* Qasystems Controller
*
* @property Qasystem $Qasystem
*/
class QasystemsController extends AppController {

    /**
    * index method
    *
    * @return void
    */
    public function index() {
        $this->Qasystem->recursive = 0;
        $this->set('qasystems', $this->paginate());
    }

    public function download($data){
        list($type,$id) = explode('=',$data);        
        $file = null;
        $path = 'http://newneu.com';
        $baseData = null;

        $baseData = $this->Qasystem->Subqasystem->findById($id);

        if($baseData){
            $file = $path . $baseData["Subqasystem"]["{$type}"]; 
            header("Content-Disposition: attachment; filename=" . basename($file)); 
            if(readfile("{$file}")){
                $this->redirect('/qasystems/index/');
            }
        }else{
            throw new NotFoundException(__('Not found'));
            $this->redirect('/qasystems/index/');
        }
        exit();
    }



    /**
    * view method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function view($id = null) {
        $this->Qasystem->id = $id;
        if (!$this->Qasystem->exists()) {
            throw new NotFoundException(__('Invalid qasystem'));
        }
        $this->set('qasystem', $this->Qasystem->read(null, $id));
    }

    public function checkSubqasystem($data){

        $id = null;
        $qasystems = array();

        $services = array(
        $data["Subqasystem"]["qa_system_path"]["name"],
        $data["Subqasystem"]["qa_policy_path"]["name"],
        $data["Subqasystem"]["qa_indicator_path"]["name"],
        $data["Subqasystem"]["qa_operate_path"]["name"],
        $data["Subqasystem"]["qa_result_path"]["name"],
        $data["Subqasystem"]["qa_info_path"]["name"],
        $data["Subqasystem"]["qa_invo_path"]["name"],
        $data["Subqasystem"]["qa_exchange_path"]["name"],
        $data["Subqasystem"]["qa_dev_path"]["name"],
        );

        $names = array(
        "qa_system_",
        "qa_policy_",
        "qa_operate_",
        "qa_indicator_",
        "qa_result_",
        "qa_info_",
        "qa_invo_",
        "qa_exchange_",
        "qa_dev_",
        );

        $paths = array(
        "qa_system_path",
        "qa_policy_path",
        "qa_operate_path",
        "qa_indicator_path",
        "qa_result_path",
        "qa_info_path",
        "qa_invo_path",
        "qa_exchange_path",
        "qa_dev_path",
        );

        $types = array(
        "qa_system_type",
        "qa_policy_type",
        "qa_operate_type",
        "qa_indicator_type",
        "qa_result_type",
        "qa_info_type",
        "qa_invo_type",
        "qa_exchange_type",
        "qa_dev_type",
        );

        // pr($data["Consult"]);

        for($j = 0; $j <= 8; $j++){
            //pr($j);
            $qasystems["{$types[$j]}"] = $data["Subqasystem"]["{$types[$j]}"];

            if($j < 9){
                $qasystems["{$paths[$j]}"] = NULL;
            }

        }
        // Realpath
        $destination_path = realpath("files/Elements_09/Qasystem");

        // Folder
        $folder = '/files/Elements_09/Qasystem/';

        for($i = 0; $i < count($services); $i++){
            //pr($services[$i]);
            if($services[$i]){

                $name =  $names[$i] . date('YmdHis') . "_" . $services[$i];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Subqasystem"]["{$paths[$i]}"]["tmp_name"];

                if( move_uploaded_file($files, $target_path) ){

                    $qasystems["{$paths[$i]}"] = $path;

                }
            }
        }

        $this->Qasystem->Subqasystem->create();

        if($this->Qasystem->Subqasystem->save($qasystems)){
            $id = $this->Qasystem->Subqasystem->getLastInsertID();
        }

        return $id;
    }



    /**
    * add method
    *
    * @return void
    */
    public function add() {
        if ($this->request->is('post')) {

            $qasystem_id = $this->checkSubqasystem($this->request->data);

            $this->Qasystem->create();

            $this->request->data["Qasystem"]["subqasystem_id"] = $qasystem_id;

            if ($this->Qasystem->save($this->request->data)) {
                $this->Session->setFlash(__('The qasystem has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The qasystem could not be saved. Please, try again.'));
            }
        }
        $organizations = $this->Qasystem->Organization->find('list');
        $years = $this->Qasystem->Year->find('list');
        $subqasystems = $this->Qasystem->Subqasystem->find('list');
        $this->set(compact('organizations', 'years', 'subqasystems'));
    }

    /**
    * edit method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        $this->Qasystem->id = $id;
        if (!$this->Qasystem->exists()) {
            throw new NotFoundException(__('Invalid qasystem'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Qasystem->save($this->request->data)) {
                $this->Session->setFlash(__('The qasystem has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The qasystem could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Qasystem->read(null, $id);
        }
        $organizations = $this->Qasystem->Organization->find('list');
        $years = $this->Qasystem->Year->find('list');
        $subqasystems = $this->Qasystem->Subqasystem->find('list');
        $this->set(compact('organizations', 'years', 'subqasystems'));
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
        $this->Qasystem->id = $id;
        if (!$this->Qasystem->exists()) {
            throw new NotFoundException(__('Invalid qasystem'));
        }
        if ($this->Qasystem->delete()) {
            $this->Session->setFlash(__('Qasystem deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Qasystem was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
