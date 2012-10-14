<?php
App::uses('AppController', 'Controller');
/**
 * Subfinancials Controller
 *
 * @property Subfinancial $Subfinancial
 */
class SubfinancialsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subfinancial->recursive = 0;
		$this->set('subfinancials', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subfinancial->id = $id;
		if (!$this->Subfinancial->exists()) {
			throw new NotFoundException(__('Invalid subfinancial'));
		}
		$this->set('subfinancial', $this->Subfinancial->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subfinancial->create();
			if ($this->Subfinancial->save($this->request->data)) {
				$this->Session->setFlash(__('The subfinancial has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subfinancial could not be saved. Please, try again.'));
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
		$this->Subfinancial->id = $id;
		if (!$this->Subfinancial->exists()) {
			throw new NotFoundException(__('Invalid subfinancial'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subfinancial->save($this->request->data)) {
				$this->Session->setFlash(__('The subfinancial has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subfinancial could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subfinancial->read(null, $id);
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
		$this->Subfinancial->id = $id;
		if (!$this->Subfinancial->exists()) {
			throw new NotFoundException(__('Invalid subfinancial'));
		}
		if ($this->Subfinancial->delete()) {
			$this->Session->setFlash(__('Subfinancial deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subfinancial was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
