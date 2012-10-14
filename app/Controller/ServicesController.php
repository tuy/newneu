<?php
App::uses('AppController', 'Controller');
/**
* Services Controller
*
* @property Service $Service
*/
class ServicesController extends AppController {

    /**
    * index method
    *
    * @return void
    */
    public function index() {
        $this->Service->recursive = 0;
        //pr($this->paginate());
        $this->set('services', $this->paginate());
    }

    public function download($data){
        list($type, $id, $paths) = explode('=',$data);
        //$paths = split('=',$data);
        $file = null;
        $path = 'http://newneu.com';
        $baseData = null;

        if($type == "Service"){
            $baseData = $this->Service->findById($id);
        }else{
            $baseData = $this->Service->{$type}->findById($id);
        }

        if($baseData){
            $file = $path . $baseData["{$type}"]["{$paths}"]; 
            header("Content-Disposition: attachment; filename=" . basename($file)); 
            if(readfile("{$file}")){
                $this->redirect('/services/index/');
            }
        }else{
            throw new NotFoundException(__('Not found'));
            $this->redirect('/services/index/');
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
        $this->Service->id = $id;
        if (!$this->Service->exists()) {
            throw new NotFoundException(__('Invalid service'));
        }
        $this->set('service', $this->Service->read(null, $id));
    }

    public function checkSubservice($data){

        $id = null;
        $consults = array();

        $services = array(
        $data["Subservice"]["s_system_path"]["name"],
        $data["Subservice"]["s_stu_upgrade_path"]["name"],
        $data["Subservice"]["s_rs_upgrade_path"]["name"],
        $data["Subservice"]["s_eval_path"]["name"],
        $data["Subservice"]["s_search_path"]["name"],
        $data["Subservice"]["s_participant_path"]["name"],
        $data["Subservice"]["s_impact_path"]["name"],
        $data["Subservice"]["s_adap_path"]["name"],
        $data["Subservice"]["s_relay_path"]["name"],
        );

        $names = array(
        "s_system_",
        "s_stu_upgrade_",
        "s_rs_upgrade_",
        "s_eval_",
        "s_search_",
        "s_participant_",
        "s_impact_",
        "s_adap_",
        "s_relay_",
        );

        $paths = array(
        "s_system_path",
        "s_stu_upgrade_path",
        "s_rs_upgrade_path",
        "s_eval_path",
        "s_search_path",
        "s_participant_path",
        "s_impact_path",
        "s_adap_path",
        "s_relay_path",
        );

        $types = array(
        "s_system_type",
        "s_stu_upgrade_type",
        "s_rs_upgrade_type",
        "s_eval_type",
        "s_search_type",
        "s_participant_type",
        "s_impact_type",
        "s_adap_type",
        "s_relay_type",
        );

        //pr($data["Subresearch"]);

        for($j = 0; $j <= 8; $j++){
            //pr($j);
            $consults["{$types[$j]}"] = $data["Subservice"]["{$types[$j]}"];

            if($j < 9){
                $consults["{$paths[$j]}"] = NULL;
            }

        }

        // Realpath
        $destination_path = realpath("files/Elements_05/Subservices");

        // Folder
        $folder = '/files/Elements_05/Subservices/';

        for($i = 0; $i < count($services); $i++){
            //pr($services[$i]);
            if($services[$i]){

                $name =  $names[$i] . date('YmdHis') . "_" . $services[$i];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Subservice"]["{$paths[$i]}"]["tmp_name"];

                if( move_uploaded_file($files, $target_path) ){

                    $consults["{$paths[$i]}"] = $path;

                }
            }
        }

        //pr($consults);
        //exit();

        $this->Service->Subservice->create();

        if($this->Service->Subservice->save($consults)){
            $id = $this->Service->Subservice->getLastInsertID();
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
            // pr($this->request->data);
            //exit();
            $subservice_id = $this->checkSubservice($this->request->data);

            $this->request->data["Service"]["subservice_id"] = $subservice_id;

            // Move plan file
            $plan_folder = null;

            //Elem path
            if($this->request->data["Service"]["ab_name_path"]["name"]){

                $destination_path = realpath("files/Elements_05/Abstracts");

                //Folder
                $folder = '/files/Elements_05/Abstracts/'; 

                //File name
                $name = date('YmdHis') . "_" . $this->request->data["Service"]["ab_name_path"]["name"];

                // File path 
                $plan_folder = $folder . $name;

                //Where to keep file
                $target_path = $destination_path . "/" . $name;

                //File upload
                $files = $this->request->data["Service"]["ab_name_path"]["tmp_name"];

                move_uploaded_file($files, $target_path);
            }

            $this->request->data["Service"]["ab_name_path"] = $plan_folder;

            //pr($this->request->data);
            //exit();

            $this->Service->create();
            if ($this->Service->save($this->request->data)) {
                $this->Session->setFlash(__('The service has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The service could not be saved. Please, try again.'));
            }
        }
        $organizations = $this->Service->Organization->find('list');
        $stypes = $this->Service->Stype->find('list');
        $subservices = $this->Service->Subservice->find('list');
        $this->set(compact('organizations', 'stypes', 'subservices'));
    }

    /**
    * edit method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        $this->Service->id = $id;
        if (!$this->Service->exists()) {
            throw new NotFoundException(__('Invalid service'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Service->save($this->request->data)) {
                $this->Session->setFlash(__('The service has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The service could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Service->read(null, $id);
        }
        $organizations = $this->Service->Organization->find('list');
        $stypes = $this->Service->Stype->find('list');
        $subservices = $this->Service->Subservice->find('list');
        $this->set(compact('organizations', 'stypes', 'subservices'));
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
        $this->Service->id = $id;
        if (!$this->Service->exists()) {
            throw new NotFoundException(__('Invalid service'));
        }
        if ($this->Service->delete()) {
            $this->Session->setFlash(__('Service deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Service was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
