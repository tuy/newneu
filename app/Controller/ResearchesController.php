<?php
App::uses('AppController', 'Controller');
/**
* Researches Controller
*
* @property Research $Research
*/
class ResearchesController extends AppController {

    /**
    * index method
    *
    * @return void
    */
    public function index() {
        $this->Research->recursive = 0;
        $this->set('researches', $this->paginate());
    }


    public function download($data){
        list($type, $id, $paths) = explode('=',$data);
        //$paths = split('=',$data);
        $file = null;
        $path = 'http://newneu.com';
        $baseData = null;

        if($type == "Research"){
            $baseData = $this->Research->findById($id);
        }else{
            $baseData = $this->Research->{$type}->findById($id);
        }

        if($baseData){
            $file = $path . $baseData["{$type}"]["{$paths}"]; 
            header("Content-Disposition: attachment; filename=" . basename($file)); 
            if(readfile("{$file}")){
                $this->redirect('/researches/index/');
            }
        }else{
            throw new NotFoundException(__('Not found'));
            $this->redirect('/researches/index/');
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
        $this->Research->id = $id;
        if (!$this->Research->exists()) {
            throw new NotFoundException(__('Invalid research'));
        }
        $this->set('research', $this->Research->read(null, $id));
    }

    public function checkSubresearch($data){

        $id = null;
        $consults = array();

        $services = array(
        $data["Subresearch"]["rs_system_path"]["name"],
        $data["Subresearch"]["rs_upgrade_path"]["name"],
        $data["Subresearch"]["rs_dev_path"]["name"],
        $data["Subresearch"]["rs_budget_path"]["name"],
        $data["Subresearch"]["rs_room_path"]["name"],
        $data["Subresearch"]["rs_lib_path"]["name"],
        $data["Subresearch"]["rs_support_path"]["name"],
        $data["Subresearch"]["rs_event_path"]["name"],
        $data["Subresearch"]["rs_follow_path"]["name"],
        $data["Subresearch"]["rs_adap_path"]["name"],
        $data["Subresearch"]["rs_create_path"]["name"],
        $data["Subresearch"]["rs_pub_path"]["name"],
        $data["Subresearch"]["rs_combine_path"]["name"],
        $data["Subresearch"]["rs_ads_path"]["name"],
        $data["Subresearch"]["rs_use_path"]["name"],
        $data["Subresearch"]["rs_patent_path"]["name"]
        );

        $names = array(
        "rs_system_",
        "rs_upgrade_",
        "rs_dev_",
        "rs_budget_",
        "rs_room_",
        "rs_lib_",
        "rs_support_",
        "rs_event_",
        "rs_follow_",
        "rs_adap_",
        "rs_create_",
        "rs_pub_",
        "rs_combine_",
        "rs_ads_",
        "rs_use_",
        "rs_patent_",
        );

        $paths = array(
        "rs_system_path",
        "rs_upgrade_path",
        "rs_dev_path",
        "rs_budget_path",
        "rs_room_path",
        "rs_lib_path",
        "rs_support_path",
        "rs_event_path",
        "rs_follow_path",
        "rs_adap_path",
        "rs_create_path",
        "rs_pub_path",
        "rs_combine_path",
        "rs_ads_path",
        "rs_use_path",
        "rs_patent_path",
        );

        $types = array(
        "rs_system_type",
        "rs_upgrade_type",
        "rs_dev_type",
        "rs_budget_type",
        "rs_room_type",
        "rs_lib_type",
        "rs_support_type",
        "rs_event_type",
        "rs_follow_type",
        "rs_adap_type",
        "rs_create_type",
        "rs_pub_type",
        "rs_combine_type",
        "rs_ads_type",
        "rs_use_type",
        "rs_patent_type",
        );

        //pr($data["Subresearch"]);

        for($j = 0; $j <= 15; $j++){
            //pr($j);
            $consults["{$types[$j]}"] = $data["Subresearch"]["{$types[$j]}"];

            if($j < 16){
                $consults["{$paths[$j]}"] = NULL;
            }

        }

        // Realpath
        $destination_path = realpath("files/Elements_04/Subresearches");

        // Folder
        $folder = '/files/Elements_04/Subresearches/';

        for($i = 0; $i < count($services); $i++){
            //pr($services[$i]);
            if($services[$i]){

                $name =  $names[$i] . date('YmdHis') . "_" . $services[$i];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Subresearch"]["{$paths[$i]}"]["tmp_name"];

                if( move_uploaded_file($files, $target_path) ){

                    $consults["{$paths[$i]}"] = $path;

                }
            }
        }

        $this->Research->Subresearch->create();

        if($this->Research->Subresearch->save($consults)){
            $id = $this->Research->Subresearch->getLastInsertID();
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

            $subresearch_id = $this->checkSubresearch($this->request->data);

            $this->request->data["Research"]["subresearch_id"] = $subresearch_id;



            // Move plan file
            $plan_folder_qc = null;
            $plan_folder_pb = null;
            //pr($this->request->data);
            //            exit();

            $rs_name = array(
            '_qc_rs_',
            '_pb_rs_'
            );

            // Research_qc path
            if($this->request->data["Research"]["qc_rs_path"]["name"]){

                $destination_path = realpath("files/Elements_04/Researches_qc");

                // Folder
                $folder = '/files/Elements_04/Researches_qc/'; 

                // File name
                $name = $rs_name[0] . date('YmdHis') . "_" . $this->request->data["Research"]["qc_rs_path"]["name"];

                // File path 
                $plan_folder_qc = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $this->request->data["Research"]["qc_rs_path"]["tmp_name"];

                move_uploaded_file($files, $target_path);
            }

            // Research_pb path
            if($this->request->data["Research"]["pb_rs_path"]["name"]){

                $destination_path = realpath("files/Elements_04/Researches_pb");

                // Folder
                $folder = '/files/Elements_04/Researches_pb/'; 

                // File name
                $name = $rs_name[1] . date('YmdHis') . "_" . $this->request->data["Research"]["pb_rs_path"]["name"];

                // File path 
                $plan_folder_pb = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $this->request->data["Research"]["pb_rs_path"]["tmp_name"];

                move_uploaded_file($files, $target_path);
            }


            $this->request->data["Research"]["qc_rs_path"] = $plan_folder_qc;
            $this->request->data["Research"]["pb_rs_path"] = $plan_folder_pb;

            $this->Research->create();
            if ($this->Research->save($this->request->data)) {
                $this->Session->setFlash(__('The research has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The research could not be saved. Please, try again.'));
            }
        }
        $years = $this->Research->Year->find('list');
        $rstypes = $this->Research->Rstype->find('list');
        $rscodes = $this->Research->Rscode->find('list');
        $organizations = $this->Research->Organization->find('list');
        $subresearches = $this->Research->Subresearch->find('list');
        $this->set(compact('years', 'rstypes', 'rscodes', 'organizations', 'subresearches'));
    }

    /**
    * edit method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        $this->Research->id = $id;
        if (!$this->Research->exists()) {
            throw new NotFoundException(__('Invalid research'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Research->save($this->request->data)) {
                $this->Session->setFlash(__('The research has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The research could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Research->read(null, $id);
        }
        $years = $this->Research->Year->find('list');
        $rstypes = $this->Research->Rstype->find('list');
        $rscodes = $this->Research->Rscode->find('list');
        $organizations = $this->Research->Organization->find('list');
        $subresearches = $this->Research->Subresearch->find('list');
        $this->set(compact('years', 'rstypes', 'rscodes', 'organizations', 'subresearches'));
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
        $this->Research->id = $id;
        if (!$this->Research->exists()) {
            throw new NotFoundException(__('Invalid research'));
        }
        if ($this->Research->delete()) {
            $this->Session->setFlash(__('Research deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Research was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
