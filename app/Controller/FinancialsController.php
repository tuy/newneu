<?php
App::uses('AppController', 'Controller');
/**
* Financials Controller
*
* @property Financial $Financial
*/
class FinancialsController extends AppController {

    /**
    * index method
    *
    * @return void
    */
    public function index() {
        $this->Financial->recursive = 0;
        $this->set('financials', $this->paginate());
    }

    public function download($data){
        list($type,$id) = explode('=',$data);        
        $file = null;
        $path = 'http://newneu.com';
        $baseData = null;

        $baseData = $this->Financial->Subfinancial->findById($id);

        if($baseData){
            $file = $path . $baseData["Subfinancial"]["{$type}"]; 
            header("Content-Disposition: attachment; filename=" . basename($file)); 
            if(readfile("{$file}")){
                $this->redirect('/financials/index/');
            }
        }else{
            throw new NotFoundException(__('Not found'));
            $this->redirect('/financials/index/');
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
        $this->Financial->id = $id;
        if (!$this->Financial->exists()) {
            throw new NotFoundException(__('Invalid financial'));
        }
        $this->set('financial', $this->Financial->read(null, $id));
    }



    public function checkSubfinancial($data){

        $id = null;
        $financials = array();

        $services = array(
        $data["Subfinancial"]["f_plan_path"]["name"],
        $data["Subfinancial"]["f_resource_path"]["name"],
        $data["Subfinancial"]["f_year_path"]["name"],
        $data["Subfinancial"]["f_report_path"]["name"],
        $data["Subfinancial"]["f_analyze_path"]["name"],
        $data["Subfinancial"]["f_check_path"]["name"],
        $data["Subfinancial"]["f_follow_path"]["name"],
        );

        $names = array(
        "f_plan_",
        "f_resource_",
        "f_year_",
        "f_report_",
        "f_analyze_",
        "f_check_",
        "f_follow_",
        );

        $paths = array(
        "f_plan_path",
        "f_resource_path",
        "f_year_path",
        "f_report_path",
        "f_analyze_path",
        "f_check_path",
        "f_follow_path",
        );

        $types = array(
        "f_plan_type",
        "f_resource_type",
        "f_year_type",
        "f_report_type",
        "f_analyze_type",
        "f_check_type",
        "f_follow_type",
        );

        // pr($data["Consult"]);

        for($j = 0; $j <= 6; $j++){
            //pr($j);
            $financials["{$types[$j]}"] = $data["Subfinancial"]["{$types[$j]}"];

            if($j < 7){
                $financials["{$paths[$j]}"] = NULL;
            }

        }
        // Realpath
        $destination_path = realpath("files/Elements_08/Financial");

        // Folder
        $folder = '/files/Elements_08/Financial/';

        for($i = 0; $i < count($services); $i++){
            //pr($services[$i]);
            if($services[$i]){

                $name =  $names[$i] . date('YmdHis') . "_" . $services[$i];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Subfinancial"]["{$paths[$i]}"]["tmp_name"];

                if( move_uploaded_file($files, $target_path) ){

                    $financials["{$paths[$i]}"] = $path;

                }
            }
        }

        $this->Financial->Subfinancial->create();

        if($this->Financial->Subfinancial->save($financials)){
            $id = $this->Financial->Subfinancial->getLastInsertID();
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
//            exit();
            
            $financial_id = $this->checkSubfinancial($this->request->data);

            $this->Financial->create();

            $this->request->data["Financial"]["subfinancial_id"] = $financial_id;


            if ($this->Financial->save($this->request->data)) {
                $this->Session->setFlash(__('The financial has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The financial could not be saved. Please, try again.'));
            }
        }
        $organizations = $this->Financial->Organization->find('list');
        $years = $this->Financial->Year->find('list');
        $subfinancials = $this->Financial->Subfinancial->find('list');
        $this->set(compact('organizations', 'years', 'subfinancials'));
    }

    /**
    * edit method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        $this->Financial->id = $id;
        if (!$this->Financial->exists()) {
            throw new NotFoundException(__('Invalid financial'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Financial->save($this->request->data)) {
                $this->Session->setFlash(__('The financial has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The financial could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Financial->read(null, $id);
        }
        $organizations = $this->Financial->Organization->find('list');
        $years = $this->Financial->Year->find('list');
        $subfinancials = $this->Financial->Subfinancial->find('list');
        $this->set(compact('organizations', 'years', 'subfinancials'));
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
        $this->Financial->id = $id;
        if (!$this->Financial->exists()) {
            throw new NotFoundException(__('Invalid financial'));
        }
        if ($this->Financial->delete()) {
            $this->Session->setFlash(__('Financial deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Financial was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
