<?php
App::uses('AppController', 'Controller');
/**
* Cultures Controller
*
* @property Culture $Culture
*/
class CulturesController extends AppController {

    /**
    * index method
    *
    * @return void
    */
    public function index() {
        $this->Culture->recursive = 0;
        $this->set('cultures', $this->paginate());
    }

    public function download($data){
        list($type, $id, $paths) = explode('=',$data);
        //$paths = split('=',$data);
        $file = null;
        $path = 'http://newneu.com';
        $baseData = null;

        if($type == "Culture"){
            $baseData = $this->Culture->findById($id);
        }else{
            $baseData = $this->Culture->{$type}->findById($id);
        }

        if($baseData){
            $file = $path . $baseData["{$type}"]["{$paths}"]; 
            header("Content-Disposition: attachment; filename=" . basename($file)); 
            if(readfile("{$file}")){
                $this->redirect('/cultures/index/');
            }
        }else{
            throw new NotFoundException(__('Not found'));
            $this->redirect('/cultures/index/');
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
        $this->Culture->id = $id;
        if (!$this->Culture->exists()) {
            throw new NotFoundException(__('Invalid culture'));
        }
        $this->set('culture', $this->Culture->read(null, $id));
    }

    public function checkSubculture($data){

        $id = null;
        $consults = array();

        $services = array(
        $data["Subculture"]["c_system_path"]["name"],
        $data["Subculture"]["c_upgrade_path"]["name"],
        $data["Subculture"]["c_publish_path"]["name"],        
        $data["Subculture"]["c_estimate_path"]["name"],        
        $data["Subculture"]["c_apply_path"]["name"],        
        $data["Subculture"]["c_standard_path"]["name"],        
        );

        $names = array(
        "c_system_",
        "c_upgrade_",
        "c_publish_",
        "c_estimate_",
        "c_apply_",
        "c_standard_",
        );

        $paths = array(
        "c_system_path",
        "c_upgrade_path",
        "c_publish_path",
        "c_estimate_path",
        "c_apply_path",
        "c_standard_path",
        );

        $types = array(
        "c_system_type",
        "c_upgrade_type",
        "c_publish_type",
        "c_estimate_type",
        "c_apply_type",
        "c_standard_type",
        );

        //pr($data["Subresearch"]);

        for($j = 0; $j <= 5; $j++){
            //pr($j);
            $consults["{$types[$j]}"] = $data["Subculture"]["{$types[$j]}"];

            if($j < 6){
                $consults["{$paths[$j]}"] = NULL;
            }

        }

        // Realpath
        $destination_path = realpath("files/Elements_06/Subcultures");

        // Folder
        $folder = '/files/Elements_06/Subcultures/';

        for($i = 0; $i < count($services); $i++){
            //pr($services[$i]);
            if($services[$i]){

                $name =  $names[$i] . date('YmdHis') . "_" . $services[$i];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Subculture"]["{$paths[$i]}"]["tmp_name"];

                if( move_uploaded_file($files, $target_path) ){

                    $consults["{$paths[$i]}"] = $path;

                }
            }
        }
        
        $this->Culture->Subculture->create();

        if($this->Culture->Subculture->save($consults)){
            $id = $this->Culture->Subculture->getLastInsertID();
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

            $subculture_id = $this->checkSubculture($this->request->data);

            $this->request->data["Culture"]["subculture_id"] = $subculture_id;

            // Move plan file
            $plan_folder = null;

            //Elem path
            if($this->request->data["Culture"]["total_path"]["name"]){

                $destination_path = realpath("files/Elements_05/Total");

                //Folder
                $folder = '/files/Elements_06/Total/'; 

                //File name
                $name = date('YmdHis') . "_" . $this->request->data["Culture"]["total_path"]["name"];

                // File path 
                $plan_folder = $folder . $name;

                //Where to keep file
                $target_path = $destination_path . "/" . $name;

                //File upload
                $files = $this->request->data["Culture"]["total_path"]["tmp_name"];

                move_uploaded_file($files, $target_path);
            }

            $this->request->data["Culture"]["total_path"] = $plan_folder;

            //pr($this->request->data);
            //exit();

            $this->Culture->create();
            if ($this->Culture->save($this->request->data)) {
                $this->Session->setFlash(__('The culture has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The culture could not be saved. Please, try again.'));
            }
        }
        $organizations = $this->Culture->Organization->find('list');
        $subcultures = $this->Culture->Subculture->find('list');
        $this->set(compact('organizations', 'subcultures'));
    }

    /**
    * edit method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        $this->Culture->id = $id;
        if (!$this->Culture->exists()) {
            throw new NotFoundException(__('Invalid culture'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Culture->save($this->request->data)) {
                $this->Session->setFlash(__('The culture has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The culture could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Culture->read(null, $id);
        }
        $organizations = $this->Culture->Organization->find('list');
        $subcultures = $this->Culture->Subculture->find('list');
        $this->set(compact('organizations', 'subcultures'));
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
        $this->Culture->id = $id;
        if (!$this->Culture->exists()) {
            throw new NotFoundException(__('Invalid culture'));
        }
        if ($this->Culture->delete()) {
            $this->Session->setFlash(__('Culture deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Culture was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
