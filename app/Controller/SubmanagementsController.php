<?php
App::uses('AppController', 'Controller');
/**
 * Submanagements Controller
 *
 * @property Submanagement $Submanagement
 */
class SubmanagementsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Submanagement->recursive = 0;
		$this->set('submanagements', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Submanagement->id = $id;
		if (!$this->Submanagement->exists()) {
			throw new NotFoundException(__('Invalid submanagement'));
		}
		$this->set('submanagement', $this->Submanagement->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Submanagement->create();
			if ($this->Submanagement->save($this->request->data)) {
				$this->Session->setFlash(__('The submanagement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submanagement could not be saved. Please, try again.'));
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
		$this->Submanagement->id = $id;
		if (!$this->Submanagement->exists()) {
			throw new NotFoundException(__('Invalid submanagement'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Submanagement->save($this->request->data)) {
				$this->Session->setFlash(__('The submanagement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submanagement could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Submanagement->read(null, $id);
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
		$this->Submanagement->id = $id;
		if (!$this->Submanagement->exists()) {
			throw new NotFoundException(__('Invalid submanagement'));
		}
		if ($this->Submanagement->delete()) {
			$this->Session->setFlash(__('Submanagement deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Submanagement was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
