<?php
App::uses('AppController', 'Controller');
/**
 * Indicators Controller
 *
 * @property Indicator $Indicator
 */
class IndicatorsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Indicator->recursive = 0;
		$this->set('indicators', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Indicator->id = $id;
		if (!$this->Indicator->exists()) {
			throw new NotFoundException(__('Invalid indicator'));
		}
		$this->set('indicator', $this->Indicator->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Indicator->create();
			if ($this->Indicator->save($this->request->data)) {
				$this->Session->setFlash(__('The indicator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The indicator could not be saved. Please, try again.'));
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
		$this->Indicator->id = $id;
		if (!$this->Indicator->exists()) {
			throw new NotFoundException(__('Invalid indicator'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Indicator->save($this->request->data)) {
				$this->Session->setFlash(__('The indicator has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The indicator could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Indicator->read(null, $id);
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
		$this->Indicator->id = $id;
		if (!$this->Indicator->exists()) {
			throw new NotFoundException(__('Invalid indicator'));
		}
		if ($this->Indicator->delete()) {
			$this->Session->setFlash(__('Indicator deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Indicator was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
