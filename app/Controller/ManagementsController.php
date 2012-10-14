<?php
App::uses('AppController', 'Controller');
/**
 * Managements Controller
 *
 * @property Management $Management
 */
class ManagementsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Management->recursive = 0;
		$this->set('managements', $this->paginate());
	}
    
    public function download($data){
        list($type,$id) = explode('=',$data);        
        $file = null;
        $path = 'http://newneu.com';
        $baseData = null;

        $baseData = $this->Management->Submanagement->findById($id);

        if($baseData){
            $file = $path . $baseData["Submanagement"]["{$type}"]; 
            header("Content-Disposition: attachment; filename=" . basename($file)); 
            if(readfile("{$file}")){
                $this->redirect('/managements/index/');
            }
        }else{
            throw new NotFoundException(__('Not found'));
            $this->redirect('/managements/index/');
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
		$this->Management->id = $id;
		if (!$this->Management->exists()) {
			throw new NotFoundException(__('Invalid management'));
		}
		$this->set('management', $this->Management->read(null, $id));
	}
    
     public function checkSubmanagement($data){

        $id = null;
        $manages = array();

        $services = array(
        $data["Submanagement"]["m_estimate_path"]["name"],
        $data["Submanagement"]["m_information_path"]["name"],
        $data["Submanagement"]["m_follow_path"]["name"],
        $data["Submanagement"]["m_support_path"]["name"],
        $data["Submanagement"]["m_relay_path"]["name"],
        $data["Submanagement"]["m_manage_path"]["name"],
        $data["Submanagement"]["m_eval_path"]["name"],
        $data["Submanagement"]["m_set_path"]["name"],
        $data["Submanagement"]["m_dev_path"]["name"],
        $data["Submanagement"]["m_share_path"]["name"],
        $data["Submanagement"]["m_publish_path"]["name"],
        $data["Submanagement"]["m_present_path"]["name"],
        $data["Submanagement"]["m_plot_path"]["name"],
        $data["Submanagement"]["m_info_path"]["name"],
        $data["Submanagement"]["m_esti_path"]["name"],
        $data["Submanagement"]["m_assess_path"]["name"],
        $data["Submanagement"]["m_send_path"]["name"],
        $data["Submanagement"]["m_board_path"]["name"],
        $data["Submanagement"]["m_analyze_path"]["name"],
        $data["Submanagement"]["m_esanalyze_path"]["name"],
        $data["Submanagement"]["m_plan_path"]["name"],
        $data["Submanagement"]["m_esfollow_path"]["name"],
        $data["Submanagement"]["m_adap_path"]["name"], 
        );

        $names = array(
        "m_estimate_",
        "m_information_",
        "m_follow_",
        "m_support_",
        "m_relay_",
        "m_manage_",
        "m_eval_",
        "m_set_",
        "m_dev_",
        "m_share_",
        "m_publish_",
        "m_present_",
        "m_plot_",
        "m_info_",
        "m_esti_",
        "m_assess_",
        "m_send_",
        "m_board_",
        "m_analyze_",
        "m_esanalyze_",
        "m_plan_",
        "m_esfollow_",
        "m_adap_",    
        );

        $paths = array(
        "m_estimate_path",
        "m_information_path",
        "m_follow_path",
        "m_support_path",
        "m_relay_path",
        "m_manage_path",
        "m_eval_path",
        "m_set_path",
        "m_dev_path",
        "m_share_path",
        "m_publish_path",
        "m_present_path",
        "m_plot_path",
        "m_info_path",
        "m_esti_path",
        "m_assess_path",
        "m_send_path",
        "m_board_path",
        "m_analyze_path",
        "m_esanalyze_path",
        "m_plan_path",
        "m_esfollow_path",
        "m_adap_path",        
        );

        $types = array(
        "m_estimate_type",
        "m_information_type",
        "m_follow_type",
        "m_support_type",
        "m_relay_type",
        "m_manage_type",
        "m_eval_type",
        "m_set_type",
        "m_dev_type",
        "m_share_type",
        "m_publish_type",
        "m_present_type",
        "m_plot_type",
        "m_info_type",
        "m_esti_type",
        "m_assess_type",
        "m_send_type",
        "m_board_type",
        "m_analyze_type",
        "m_esanalyze_type",
        "m_plan_type",
        "m_esfollow_type",
        "m_adap_type",    
        );

        // pr($data["Consult"]);

        for($j = 0; $j <= 22; $j++){
            //pr($j);
            $manages["{$types[$j]}"] = $data["Submanagement"]["{$types[$j]}"];

            if($j < 23){
                $manages["{$paths[$j]}"] = NULL;
            }

        }
        
        // Realpath
        $destination_path = realpath("files/Elements_07/Submanagement");

        // Folder
        $folder = '/files/Elements_07/Submanagement/';

        for($i = 0; $i < count($services); $i++){
            //pr($services[$i]);
            if($services[$i]){

                $name =  $names[$i] . date('YmdHis') . "_" . $services[$i];

                // File path 
                $path = $folder . $name;

                // Where to keep file
                $target_path = $destination_path . "/" . $name;

                // File upload
                $files = $data["Submanagement"]["{$paths[$i]}"]["tmp_name"];

                if( move_uploaded_file($files, $target_path) ){

                    $manages["{$paths[$i]}"] = $path;

                }
            }
        }

        $this->Management->Submanagement->create();

        if($this->Management->Submanagement->save($manages)){
            $id = $this->Management->Submanagement->getLastInsertID();
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
            
            $manage_id = $this->checkSubmanagement($this->request->data);

            $this->Management->create();

            $this->request->data["Management"]["submanagement_id"] = $manage_id;
            
			
			if ($this->Management->save($this->request->data)) {
				$this->Session->setFlash(__('The management has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The management could not be saved. Please, try again.'));
			}
		}
		$organizations = $this->Management->Organization->find('list');
		$years = $this->Management->Year->find('list');
		//$submanagements = $this->Management->Submanagement->find('list');
		$this->set(compact('organizations', 'years'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Management->id = $id;
		if (!$this->Management->exists()) {
			throw new NotFoundException(__('Invalid management'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Management->save($this->request->data)) {
				$this->Session->setFlash(__('The management has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The management could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Management->read(null, $id);
		}
		$organizations = $this->Management->Organization->find('list');
		$years = $this->Management->Year->find('list');
		$submanagements = $this->Management->Submanagement->find('list');
		$this->set(compact('organizations', 'years', 'submanagements'));
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
		$this->Management->id = $id;
		if (!$this->Management->exists()) {
			throw new NotFoundException(__('Invalid management'));
		}
		if ($this->Management->delete()) {
			$this->Session->setFlash(__('Management deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Management was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
