<?php
App::uses('AppController', 'Controller');
/**
* Elems Controller
*
* @property Elem $Elem
*/
class ElemsController extends AppController {

    /**
    * index method
    *
    * @return void
    */
    public function index() {
        $this->Elem->recursive = 0;
        if($this->request->is('post')){

            $this->paginate = array(
            'conditions' => array(
            'Elem.year_id' => $this->request->data["Elem"]["year_id"],
            'Elem.organization_id' => $this->Session->read('User.User.organization_id'))
            );

        }else{
            $this->paginate = array(
            'conditions' => array(
            'Elem.organization_id' => $this->Session->read('User.User.organization_id'))
            );
        }
        //pr($this->paginate());
        //$organizations = $this->Elem->Organization->find('list');

        $years = $this->Elem->Year->find('list');
        $this->set(compact('years','relays'));

        $this->set('elems', $this->paginate());

    }

    /**
    * 
    * Download File
    * 
    */

    public function download($data){
        list($type,$id) = explode('=',$data);        
        $file = null;
        $path = 'http://newneu.com';
        $baseData = null;

        if($type == "Elem"){
            $baseData = $this->Elem->findById($id);
        }else{
            $baseData = $this->Elem->{$type}->findById($id);
        }

        if($baseData){
            $file = $path . $baseData["{$type}"]["path"]; 
            header("Content-Disposition: attachment; filename=" . basename($file)); 
            if(readfile("{$file}")){
                $this->redirect('/elems/index/');
            }
        }else{
            throw new NotFoundException(__('Not found'));
            $this->redirect('/elems/index/');
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
        $this->Elem->id = $id;
        if (!$this->Elem->exists()) {
            throw new NotFoundException(__('Invalid element'));
        }
        $this->set('elem', $this->Elem->read(null, $id));
    }

    // Relays
    public function checkRelay($data){

        $id = null;
        $type = $data["Relay"]["type"];

        if(isset($data["Elem"]["relay_id"])){
            $send_id = $data["Elem"]["relay_id"];
            $dataDB = $this->Elem->Relay->findById($send_id);
            //pr($dataDB);
            if(!empty($dataDB)){

                if( $type == 1 ){

                    // Realpath
                    $destination_path = realpath("files/Elements_01/Relays");

                    // Folder
                    $folder = '/files/Elements_01/Relays/'; 

                    // File name
                    $name =  date('YmdHis') . "_" . $data["Relay"]["path"]["name"];

                    // File path 
                    $path = $folder . $name;

                    // Where to keep file
                    $target_path = $destination_path . "/" . $name;

                    // File upload
                    $files = $data["Relay"]["path"]["tmp_name"];

                    //pr($destination_path);

                    if( move_uploaded_file($files, $target_path) ){

                        $data = array(
                        'id' => $send_id,
                        'type' => $type,
                        'path' => $path  
                        );                
                        //$this->Elem->Relay->create();
                        if($this->Elem->Relay->save($data)){
                            $id = $send_id;
                        }

                    }

                }else{
                    $data = array(
                    'id' => $send_id,
                    'type' => $type,
                    'path' => NULL  
                    );                

                    if($this->Elem->Relay->save($data)){
                        $id = $send_id;
                    }
                }
            }
        }else{

            if( $type == 1 ){

                // Realpath
                $destination_path = realpath("files/Elements_01/Relays");

                // Folder
                $folder = '/files/Elements_01/Relays/'; 

                // File name
                $name =  date('YmdHis') . "_" . $data["Relay"]["path"]["name"];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Relay"]["path"]["tmp_name"];

                //pr($destination_path);

                if( move_uploaded_file($files, $target_path) ){

                    $data = array(
                    'type' => $type,
                    'path' => $path  
                    );                

                    $this->Elem->Relay->create();

                    if($this->Elem->Relay->save($data)){
                        $id = $this->Elem->Relay->getLastInsertID();
                    }

                }

            }else{
                $data = array(
                'type' => $type  
                );                

                $this->Elem->Relay->create();

                if($this->Elem->Relay->save($data)){
                    $id = $this->Elem->Relay->getLastInsertID();
                }
            }
        }

        return $id;    
    }

    // Actions
    public function checkAction($data){

        $id = null;
        $type = $data["Action"]["type"];

        if(isset($data["Elem"]["action_id"])){
            $send_id = $data["Elem"]["action_id"];
            $dataDB = $this->Elem->Action->findById($send_id);
            //pr($dataDB);
            if(!empty($dataDB)){

                if( $type == 1 ){

                    // Realpath
                    $destination_path = realpath("files/Elements_01/Actions");

                    // Folder
                    $folder = '/files/Elements_01/Actions/'; 

                    // File name
                    $name =  date('YmdHis') . "_" . $data["Action"]["path"]["name"];

                    // File path 
                    $path = $folder . $name;

                    // Where to keep file
                    $target_path = $destination_path . "/" . $name;

                    // File upload
                    $files = $data["Action"]["path"]["tmp_name"];

                    //pr($destination_path);

                    if( move_uploaded_file($files, $target_path) ){

                        $data = array(
                        'id' => $send_id,
                        'type' => $type,
                        'path' => $path  
                        );                
                        //$this->Elem->Relay->create();
                        if($this->Elem->Action->save($data)){
                            $id = $send_id;
                        }

                    }

                }else{
                    $data = array(
                    'id' => $send_id,
                    'type' => $type,
                    'path' => NULL  
                    );                

                    if($this->Elem->Action->save($data)){
                        $id = $send_id;
                    }
                }
            }
        }else{

            if( $type == 1 ){

                // Realpath
                $destination_path = realpath("files/Elements_01/Actions");

                // Folder
                $folder = '/files/Elements_01/Actions/'; 

                // File name
                $name =  date('YmdHis') . "_" . $data["Action"]["path"]["name"];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Action"]["path"]["tmp_name"];

                //pr($destination_path);

                if( move_uploaded_file($files, $target_path) ){

                    $data = array(
                    'type' => $type,
                    'path' => $path  
                    );                

                    $this->Elem->Action->create();

                    if($this->Elem->Action->save($data)){
                        $id = $this->Elem->Action->getLastInsertID();
                    }

                }

            }else{
                $data = array(
                'type' => $type  
                );                

                $this->Elem->Action->create();

                if($this->Elem->Action->save($data)){
                    $id = $this->Elem->Action->getLastInsertID();
                }
            }
        }

        return $id;    
    }

    // Evaluates
    public function checkEvaluate($data){

        $id = null;
        $type = $data["Evaluate"]["type"];

        if(isset($data["Elem"]["evaluate_id"])){
            $send_id = $data["Elem"]["evaluate_id"];
            $dataDB = $this->Elem->Evaluate->findById($send_id);
            //pr($dataDB);
            if(!empty($dataDB)){

                if( $type == 1 ){

                    // Realpath
                    $destination_path = realpath("files/Elements_01/Evaluates");

                    // Folder
                    $folder = '/files/Elements_01/Evaluates/'; 

                    // File name
                    $name =  date('YmdHis') . "_" . $data["Evaluate"]["path"]["name"];

                    // File path 
                    $path = $folder . $name;

                    // Where to keep file
                    $target_path = $destination_path . "/" . $name;

                    // File upload
                    $files = $data["Evaluate"]["path"]["tmp_name"];

                    //pr($destination_path);

                    if( move_uploaded_file($files, $target_path) ){

                        $data = array(
                        'id' => $send_id,
                        'type' => $type,
                        'path' => $path  
                        );                
                        //$this->Elem->Relay->create();
                        if($this->Elem->Evaluate->save($data)){
                            $id = $send_id;
                        }

                    }

                }else{
                    $data = array(
                    'id' => $send_id,
                    'type' => $type,
                    'path' => NULL  
                    );                

                    if($this->Elem->Evaluate->save($data)){
                        $id = $send_id;
                    }
                }
            }
        }else{

            if( $type == 1 ){

                // Realpath
                $destination_path = realpath("files/Elements_01/Evaluates");

                // Folder
                $folder = '/files/Elements_01/Evaluates/'; 

                // File name
                $name =  date('YmdHis') . "_" . $data["Evaluate"]["path"]["name"];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Evaluate"]["path"]["tmp_name"];

                //pr($destination_path);

                if( move_uploaded_file($files, $target_path) ){

                    $data = array(
                    'type' => $type,
                    'path' => $path  
                    );                

                    $this->Elem->Evaluate->create();

                    if($this->Elem->Evaluate->save($data)){
                        $id = $this->Elem->Evaluate->getLastInsertID();
                    }

                }

            }else{
                $data = array(
                'type' => $type  
                );                

                $this->Elem->Evaluate->create();

                if($this->Elem->Evaluate->save($data)){
                    $id = $this->Elem->Evaluate->getLastInsertID();
                }
            }
        }

        return $id;    
    }

    // Indicators
    public function checkIndicator($data){

        $id = null;
        $type = $data["Indicator"]["type"];

        if(isset($data["Elem"]["indicator_id"])){
            $send_id = $data["Elem"]["indicator_id"];
            $dataDB = $this->Elem->Indicator->findById($send_id);
            //pr($dataDB);
            if(!empty($dataDB)){

                if( $type == 1 ){

                    // Realpath
                    $destination_path = realpath("files/Elements_01/Indicators");

                    // Folder
                    $folder = '/files/Elements_01/Indicators/'; 

                    // File name
                    $name =  date('YmdHis') . "_" . $data["Indicator"]["path"]["name"];

                    // File path 
                    $path = $folder . $name;

                    // Where to keep file
                    $target_path = $destination_path . "/" . $name;

                    // File upload
                    $files = $data["Indicator"]["path"]["tmp_name"];

                    //pr($destination_path);

                    if( move_uploaded_file($files, $target_path) ){

                        $data = array(
                        'id' => $send_id,
                        'type' => $type,
                        'path' => $path  
                        );                
                        //$this->Elem->Relay->create();
                        if($this->Elem->Indicator->save($data)){
                            $id = $send_id;
                        }

                    }

                }else{
                    $data = array(
                    'id' => $send_id,
                    'type' => $type,
                    'path' => NULL   
                    );                

                    if($this->Elem->Indicator->save($data)){
                        $id = $send_id;
                    }
                }
            }
        }else{

            if( $type == 1 ){

                // Realpath
                $destination_path = realpath("files/Elements_01/Indicators");

                // Folder
                $folder = '/files/Elements_01/Indicators/'; 

                // File name
                $name =  date('YmdHis') . "_" . $data["Indicator"]["path"]["name"];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Indicator"]["path"]["tmp_name"];

                //pr($destination_path);

                if( move_uploaded_file($files, $target_path) ){

                    $data = array(
                    'type' => $type,
                    'path' => $path  
                    );                

                    $this->Elem->Indicator->create();

                    if($this->Elem->Indicator->save($data)){
                        $id = $this->Elem->Indicator->getLastInsertID();
                    }

                }

            }else{
                $data = array(
                'type' => $type  
                );                

                $this->Elem->Indicator->create();

                if($this->Elem->Indicator->save($data)){
                    $id = $this->Elem->Indicator->getLastInsertID();
                }
            }
        }

        return $id;    
    }

    // Operations
    public function checkOperation($data){

        $id = null;
        $type = $data["Operation"]["type"];

        if(isset($data["Elem"]["operation_id"])){
            $send_id = $data["Elem"]["operation_id"];
            $dataDB = $this->Elem->Operation->findById($send_id);
            //pr($dataDB);
            if(!empty($dataDB)){

                if( $type == 1 ){

                    // Realpath
                    $destination_path = realpath("files/Elements_01/Operations");

                    // Folder
                    $folder = '/files/Elements_01/Operations/'; 

                    // File name
                    $name =  date('YmdHis') . "_" . $data["Operation"]["path"]["name"];

                    // File path 
                    $path = $folder . $name;

                    // Where to keep file
                    $target_path = $destination_path . "/" . $name;

                    // File upload
                    $files = $data["Operation"]["path"]["tmp_name"];

                    //pr($destination_path);

                    if( move_uploaded_file($files, $target_path) ){

                        $data = array(
                        'id' => $send_id,
                        'type' => $type,
                        'path' => $path  
                        );                
                        //$this->Elem->Relay->create();
                        if($this->Elem->Operation->save($data)){
                            $id = $send_id;
                        }

                    }

                }else{
                    $data = array(
                    'id' => $send_id,
                    'type' => $type,
                    'path' => NULL   
                    );                

                    if($this->Elem->Operation->save($data)){
                        $id = $send_id;
                    }
                }
            }
        }else{

            if( $type == 1 ){

                // Realpath
                $destination_path = realpath("files/Elements_01/Operations");

                // Folder
                $folder = '/files/Elements_01/Operations/'; 

                // File name
                $name =  date('YmdHis') . "_" . $data["Operation"]["path"]["name"];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Operation"]["path"]["tmp_name"];

                //pr($destination_path);

                if( move_uploaded_file($files, $target_path) ){

                    $data = array(
                    'type' => $type,
                    'path' => $path  
                    );                

                    $this->Elem->Operation->create();

                    if($this->Elem->Operation->save($data)){
                        $id = $this->Elem->Operation->getLastInsertID();
                    }

                }

            }else{
                $data = array(
                'type' => $type  
                );                

                $this->Elem->Operation->create();

                if($this->Elem->Operation->save($data)){
                    $id = $this->Elem->Operation->getLastInsertID();
                }
            }
        }

        return $id;    
    }

    // Report
    public function checkReport($data){

        $id = null;
        $type = $data["Report"]["type"];

        if(isset($data["Elem"]["report_id"])){
            $send_id = $data["Elem"]["report_id"];
            $dataDB = $this->Elem->Report->findById($send_id);
            //pr($dataDB);
            if(!empty($dataDB)){

                if( $type == 1 ){

                    // Realpath
                    $destination_path = realpath("files/Elements_01/Reports");

                    // Folder
                    $folder = '/files/Elements_01/Reports/'; 

                    // File name
                    $name =  date('YmdHis') . "_" . $data["Report"]["path"]["name"];

                    // File path 
                    $path = $folder . $name;

                    // Where to keep file
                    $target_path = $destination_path . "/" . $name;

                    // File upload
                    $files = $data["Report"]["path"]["tmp_name"];

                    //pr($destination_path);

                    if( move_uploaded_file($files, $target_path) ){

                        $data = array(
                        'id' => $send_id,
                        'type' => $type,
                        'path' => $path  
                        );                
                        //$this->Elem->Relay->create();
                        if($this->Elem->Report->save($data)){
                            $id = $send_id;
                        }

                    }

                }else{
                    $data = array(
                    'id' => $send_id,
                    'type' => $type,
                    'path' => NULL   
                    );                

                    if($this->Elem->Report->save($data)){
                        $id = $send_id;
                    }
                }
            }
        }else{

            if( $type == 1 ){

                // Realpath
                $destination_path = realpath("files/Elements_01/Reports");

                // Folder
                $folder = '/files/Elements_01/Reports/'; 

                // File name
                $name =  date('YmdHis') . "_" . $data["Report"]["path"]["name"];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Report"]["path"]["tmp_name"];

                //pr($destination_path);

                if( move_uploaded_file($files, $target_path) ){

                    $data = array(
                    'type' => $type,
                    'path' => $path  
                    );                

                    $this->Elem->Report->create();

                    if($this->Elem->Report->save($data)){
                        $id = $this->Elem->Report->getLastInsertID();
                    }

                }

            }else{
                $data = array(
                'type' => $type  
                );                

                $this->Elem->Report->create();

                if($this->Elem->Report->save($data)){
                    $id = $this->Elem->Report->getLastInsertID();
                }
            }
        }

        return $id;    
    }

    // Suggestion
    public function checkSuggestion($data){

        $id = null;
        $type = $data["Suggestion"]["type"];

        if(isset($data["Elem"]["suggestion_id"])){
            $send_id = $data["Elem"]["suggestion_id"];
            $dataDB = $this->Elem->Suggestion->findById($send_id);
            //pr($dataDB);
            if(!empty($dataDB)){

                if( $type == 1 ){

                    // Realpath
                    $destination_path = realpath("files/Elements_01/Suggestions");

                    // Folder
                    $folder = '/files/Elements_01/Suggestions/'; 

                    // File name
                    $name =  date('YmdHis') . "_" . $data["Suggestion"]["path"]["name"];

                    // File path 
                    $path = $folder . $name;

                    // Where to keep file
                    $target_path = $destination_path . "/" . $name;

                    // File upload
                    $files = $data["Suggestion"]["path"]["tmp_name"];

                    //pr($destination_path);

                    if( move_uploaded_file($files, $target_path) ){

                        $data = array(
                        'id' => $send_id,
                        'type' => $type,
                        'path' => $path  
                        );                
                        //$this->Elem->Relay->create();
                        if($this->Elem->Suggestion->save($data)){
                            $id = $send_id;
                        }

                    }

                }else{
                    $data = array(
                    'id' => $send_id,
                    'type' => $type,
                    'path' => NULL   
                    );                

                    if($this->Elem->Suggestion->save($data)){
                        $id = $send_id;
                    }
                }
            }
        }else{

            if( $type == 1 ){

                // Realpath
                $destination_path = realpath("files/Elements_01/Suggestions");

                // Folder
                $folder = '/files/Elements_01/Suggestions/'; 

                // File name
                $name =  date('YmdHis') . "_" . $data["Suggestion"]["path"]["name"];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Suggestion"]["path"]["tmp_name"];

                //pr($destination_path);

                if( move_uploaded_file($files, $target_path) ){

                    $data = array(
                    'type' => $type,
                    'path' => $path  
                    );                

                    $this->Elem->Suggestion->create();

                    if($this->Elem->Suggestion->save($data)){
                        $id = $this->Elem->Suggestion->getLastInsertID();
                    }

                }

            }else{
                $data = array(
                'type' => $type  
                );                

                $this->Elem->Suggestion->create();

                if($this->Elem->Suggestion->save($data)){
                    $id = $this->Elem->Suggestion->getLastInsertID();
                }
            }
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
            //pr($this->request->data);
            //exit();
            $this->Elem->create();

            // Relays
            $relay_id = $this->checkRelay($this->request->data);

            // Actions
            $action_id = $this->checkAction($this->request->data);

            // Evaluate
            $evaluate_id = $this->checkEvaluate($this->request->data);

            // Indicator
            $indicator_id = $this->checkIndicator($this->request->data);

            // Operation
            $operation_id = $this->checkOperation($this->request->data);

            // Report
            $report_id = $this->checkReport($this->request->data);

            // Suggestion
            $suggestion_id = $this->checkSuggestion($this->request->data);

            // Move plan file
            $plan_folder = null;

            // Elem path
            if($this->request->data["Elem"]["path"]["name"]){

                $destination_path = realpath("files/Elements_01/Plans");

                // Folder
                $folder = '/files/Elements_01/Plans/'; 

                // File name
                $name = date('YmdHis') . "_" . $this->request->data["Elem"]["path"]["name"];

                // File path 
                $plan_folder = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $this->request->data["Elem"]["path"]["tmp_name"];

                move_uploaded_file($files, $target_path);
            }

            $this->request->data["Elem"]["relay_id"] = $relay_id;
            $this->request->data["Elem"]["action_id"] = $action_id;
            $this->request->data["Elem"]["evaluate_id"] = $evaluate_id;
            $this->request->data["Elem"]["indicator_id"] = $indicator_id;
            $this->request->data["Elem"]["operation_id"] = $operation_id;
            $this->request->data["Elem"]["report_id"] = $report_id;
            $this->request->data["Elem"]["suggestion_id"] = $suggestion_id;
            $this->request->data["Elem"]["path"] = $plan_folder;

            if ($this->Elem->save($this->request->data)) {
                $this->Session->setFlash(__('The elem has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The elem could not be saved. Please, try again.'));
            }
        }
        $organizations = $this->Elem->Organization->find('list');
        $years = $this->Elem->Year->find('list');
        //$relays = $this->Elem->Relay->find('list');
        //$actions = $this->Elem->Action->find('list');
        //        $indicators = $this->Elem->Indicator->find('list');
        //        $operations = $this->Elem->Operation->find('list');
        //        $reports = $this->Elem->Report->find('list');
        //        $evaluates = $this->Elem->Evaluate->find('list');
        //        $suggestions = $this->Elem->Suggestion->find('list');
        $this->set(compact('organizations', 'years','relays'));

    }

    public function add_origin() {
        if ($this->request->is('post')) {
            $this->Elem->create();
            if ($this->Elem->save($this->request->data)) {
                $this->Session->setFlash(__('The elem has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The elem could not be saved. Please, try again.'));
            }
        }
        $organizations = $this->Elem->Organization->find('list');
        $years = $this->Elem->Year->find('list');
        $relays = $this->Elem->Relay->find('list');
        $actions = $this->Elem->Action->find('list');
        $indicators = $this->Elem->Indicator->find('list');
        $operations = $this->Elem->Operation->find('list');
        $reports = $this->Elem->Report->find('list');
        $evaluates = $this->Elem->Evaluate->find('list');
        $suggestions = $this->Elem->Suggestion->find('list');
        $this->set(compact('organizations', 'years', 'relays', 'actions', 'indicators', 'operations', 'reports', 'evaluates', 'suggestions'));
    }

    /**
    * edit method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        $this->Elem->id = $id;
        if (!$this->Elem->exists()) {
            throw new NotFoundException(__('Invalid elements'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {

            // Relays
            $relay_id = $this->checkRelay($this->request->data);

            // Actions
            $action_id = $this->checkAction($this->request->data);

            // Evaluate
            $evaluate_id = $this->checkEvaluate($this->request->data);

            // Indicator
            $indicator_id = $this->checkIndicator($this->request->data);

            // Operation
            $operation_id = $this->checkOperation($this->request->data);

            // Report
            $report_id = $this->checkReport($this->request->data);

            // Suggestion
            $suggestion_id = $this->checkSuggestion($this->request->data);
            // Move plan file
            $plan_folder = null;

            if($this->request->data["Elem"]["path"]["name"]){

                $destination_path = realpath("files/Elements_01/Plans");

                // Folder
                $folder = '/files/Elements_01/Plans/'; 

                // File name
                $name = date('YmdHis') . "_" . $this->request->data["Elem"]["path"]["name"];

                // File path 
                $plan_folder = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $this->request->data["Elem"]["path"]["tmp_name"];

                move_uploaded_file($files, $target_path);
            }

            //$this->request->data["Elem"]["relay_id"] = $relay_id;
            //            $this->request->data["Elem"]["action_id"] = $action_id;
            //            $this->request->data["Elem"]["evaluate_id"] = $evaluate_id;
            //            $this->request->data["Elem"]["indicator_id"] = $indicator_id;
            //            $this->request->data["Elem"]["operation_id"] = $operation_id;
            //            $this->request->data["Elem"]["report_id"] = $report_id;
            //            $this->request->data["Elem"]["suggestion_id"] = $suggestion_id;
            $this->request->data["Elem"]["path"] = $plan_folder;

            if ($this->Elem->save($this->request->data)) {
                $this->Session->setFlash(__('The elem has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The elem could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Elem->read(null, $id);
        }
        $organizations = $this->Elem->Organization->find('list');
        $years = $this->Elem->Year->find('list');
        //$relays = $this->Elem->Relay->find('list');
        //        $actions = $this->Elem->Action->find('list');
        //        $indicators = $this->Elem->Indicator->find('list');
        //        $operations = $this->Elem->Operation->find('list');
        //        $reports = $this->Elem->Report->find('list');
        //        $evaluates = $this->Elem->Evaluate->find('list');
        //        $suggestions = $this->Elem->Suggestion->find('list');
        $this->set(compact('organizations', 'years'));
    }

    // Edit Original
    public function edit_original($id = null) {
        $this->Elem->id = $id;
        if (!$this->Elem->exists()) {
            throw new NotFoundException(__('Invalid elements'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Elem->save($this->request->data)) {
                $this->Session->setFlash(__('The elem has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The elem could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Elem->read(null, $id);
        }
        $organizations = $this->Elem->Organization->find('list');
        $years = $this->Elem->Year->find('list');
        $relays = $this->Elem->Relay->find('list');
        $actions = $this->Elem->Action->find('list');
        $indicators = $this->Elem->Indicator->find('list');
        $operations = $this->Elem->Operation->find('list');
        $reports = $this->Elem->Report->find('list');
        $evaluates = $this->Elem->Evaluate->find('list');
        $suggestions = $this->Elem->Suggestion->find('list');
        $this->set(compact('organizations', 'years', 'relays', 'actions', 'indicators', 'operations', 'reports', 'evaluates', 'suggestions'));
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
        $this->Elem->id = $id;
        if (!$this->Elem->exists()) {
            throw new NotFoundException(__('Invalid elem'));
        }
        if ($this->Elem->delete()) {
            $this->Session->setFlash(__('Elem deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Elem was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
