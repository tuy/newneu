<?php
App::uses('AppController', 'Controller');
/**
* Events Controller
*
* @property Event $Event
*/
class EventsController extends AppController {

    /**
    * index method
    *
    * @return void
    */
    public function index() {
        $this->Event->recursive = 0;
        $this->set('events', $this->paginate());
    }

    public function download($data){
        list($type,$id) = explode('=',$data);        
        $file = null;
        $path = 'http://newneu.com';
        $baseData = null;

        $baseData = $this->Event->Consult->findById($id);

        if($baseData){
            $file = $path . $baseData["Consult"]["{$type}"]; 
            header("Content-Disposition: attachment; filename=" . basename($file)); 
            if(readfile("{$file}")){
                $this->redirect('/events/index/');
            }
        }else{
            throw new NotFoundException(__('Not found'));
            $this->redirect('/events/index/');
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
        $this->Event->id = $id;
        if (!$this->Event->exists()) {
            throw new NotFoundException(__('Invalid event'));
        }
        $this->set('event', $this->Event->read(null, $id));
    }

    /**
    * Check Consult Data
    * 
    */

    public function checkConsult($data){

        $id = null;
        $consults = array();

        $services = array(
        $data["Consult"]["stu_service_path"]["name"],
        $data["Consult"]["stu_news_path"]["name"],
        $data["Consult"]["stu_event_path"]["name"],
        $data["Consult"]["old_service_path"]["name"],
        $data["Consult"]["old_news_path"]["name"],
        $data["Consult"]["result_path"]["name"],
        $data["Consult"]["result_stu_path"]["name"],
        $data["Consult"]["event_plan_path"]["name"],
        $data["Consult"]["event_k_path"]["name"],
        $data["Consult"]["support_path"]["name"],
        $data["Consult"]["success_path"]["name"],
        $data["Consult"]["update_path"]["name"]
        );

        $names = array(
        "stu_service_",
        "stu_news_",
        "stu_event_",
        "old_service_",
        "old_news_",
        "result_",
        "result_stu_",
        "event_plan_",
        "event_k_",
        "support_",
        "success_",
        "update_"
        );

        $paths = array(
        "stu_service_path",
        "stu_news_path",
        "stu_event_path",
        "old_service_path",
        "old_news_path",
        "result_path",
        "result_stu_path",
        "event_plan_path",
        "event_k_path",
        "support_path",
        "success_path",
        "update_path"
        );

        $types = array(
        "stu_service_type",
        "stu_news_type",
        "stu_event_type",
        "old_service_type",
        "old_news_type",
        "result_type",
        "result_stu_type",
        "event_plan_type",
        "event_k_type",
        "support_type",
        "success_type",
        "update_type",
        "stu_use_one",
        "stu_use_two",
        "stu_use_three",
        "stu_use_four",
        "stu_use_five"
        );

        // pr($data["Consult"]);

        for($j = 0; $j <= 16; $j++){
            //pr($j);
            $consults["{$types[$j]}"] = $data["Consult"]["{$types[$j]}"];

            if($j < 12){
                $consults["{$paths[$j]}"] = NULL;
            }

        }

        // Realpath
        $destination_path = realpath("files/Elements_03/Consults");

        // Folder
        $folder = '/files/Elements_03/Consults/';

        for($i = 0; $i < count($services); $i++){
            //pr($services[$i]);
            if($services[$i]){

                $name =  $names[$i] . date('YmdHis') . "_" . $services[$i];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Consult"]["{$paths[$i]}"]["tmp_name"];

                if( move_uploaded_file($files, $target_path) ){

                    $consults["{$paths[$i]}"] = $path;

                }
            }
        }

        $this->Event->Consult->create();

        if($this->Event->Consult->save($consults)){
            $id = $this->Event->Consult->getLastInsertID();
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

            $consult_id = $this->checkConsult($this->request->data);

            $this->Event->create();

            $this->request->data["Event"]["consult_id"] = $consult_id;

            if ($this->Event->save($this->request->data)) {
                $this->Session->setFlash(__('The event has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The event could not be saved. Please, try again.'));
            }
        }
        $evtypes = $this->Event->Evtype->find('list');
        $organizations = $this->Event->Organization->find('list');
        $elems = $this->Event->Elem->find('list');
        $this->set(compact('evtypes', 'organizations', 'elems'));
    }

    /**
    * edit method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        $this->Event->id = $id;
        if (!$this->Event->exists()) {
            throw new NotFoundException(__('Invalid event'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Event->save($this->request->data)) {
                $this->Session->setFlash(__('The event has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The event could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Event->read(null, $id);
        }
        $evtypes = $this->Event->Evtype->find('list');
        $organizations = $this->Event->Organization->find('list');
        $elems = $this->Event->Elem->find('list');
        $consults = $this->Event->Consult->find('list');
        $this->set(compact('evtypes', 'organizations', 'elems', 'consults'));
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
        $this->Event->id = $id;
        if (!$this->Event->exists()) {
            throw new NotFoundException(__('Invalid event'));
        }
        if ($this->Event->delete()) {
            $this->Session->setFlash(__('Event deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Event was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
