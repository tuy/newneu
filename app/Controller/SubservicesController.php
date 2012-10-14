<?php
App::uses('AppController', 'Controller');
/**
 * Subservices Controller
 *
 * @property Subservice $Subservice
 */
class SubservicesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subservice->recursive = 0;
		$this->set('subservices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subservice->id = $id;
		if (!$this->Subservice->exists()) {
			throw new NotFoundException(__('Invalid subservice'));
		}
		$this->set('subservice', $this->Subservice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subservice->create();
			if ($this->Subservice->save($this->request->data)) {
				$this->Session->setFlash(__('The subservice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subservice could not be saved. Please, try again.'));
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
		$this->Subservice->id = $id;
		if (!$this->Subservice->exists()) {
			throw new NotFoundException(__('Invalid subservice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subservice->save($this->request->data)) {
				$this->Session->setFlash(__('The subservice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subservice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subservice->read(null, $id);
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
		$this->Subservice->id = $id;
		if (!$this->Subservice->exists()) {
			throw new NotFoundException(__('Invalid subservice'));
		}
		if ($this->Subservice->delete()) {
			$this->Session->setFlash(__('Subservice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subservice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
