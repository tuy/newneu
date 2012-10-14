<?php
App::uses('AppController', 'Controller');
/**
 * Subqasystems Controller
 *
 * @property Subqasystem $Subqasystem
 */
class SubqasystemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subqasystem->recursive = 0;
		$this->set('subqasystems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subqasystem->id = $id;
		if (!$this->Subqasystem->exists()) {
			throw new NotFoundException(__('Invalid subqasystem'));
		}
		$this->set('subqasystem', $this->Subqasystem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subqasystem->create();
			if ($this->Subqasystem->save($this->request->data)) {
				$this->Session->setFlash(__('The subqasystem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subqasystem could not be saved. Please, try again.'));
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
		$this->Subqasystem->id = $id;
		if (!$this->Subqasystem->exists()) {
			throw new NotFoundException(__('Invalid subqasystem'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subqasystem->save($this->request->data)) {
				$this->Session->setFlash(__('The subqasystem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subqasystem could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subqasystem->read(null, $id);
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
		$this->Subqasystem->id = $id;
		if (!$this->Subqasystem->exists()) {
			throw new NotFoundException(__('Invalid subqasystem'));
		}
		if ($this->Subqasystem->delete()) {
			$this->Session->setFlash(__('Subqasystem deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subqasystem was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
