<?php
App::uses('AppController', 'Controller');
/**
 * Rscodes Controller
 *
 * @property Rscode $Rscode
 */
class RscodesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rscode->recursive = 0;
		$this->set('rscodes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Rscode->id = $id;
		if (!$this->Rscode->exists()) {
			throw new NotFoundException(__('Invalid rscode'));
		}
		$this->set('rscode', $this->Rscode->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rscode->create();
			if ($this->Rscode->save($this->request->data)) {
				$this->Session->setFlash(__('The rscode has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rscode could not be saved. Please, try again.'));
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
		$this->Rscode->id = $id;
		if (!$this->Rscode->exists()) {
			throw new NotFoundException(__('Invalid rscode'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rscode->save($this->request->data)) {
				$this->Session->setFlash(__('The rscode has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rscode could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rscode->read(null, $id);
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
		$this->Rscode->id = $id;
		if (!$this->Rscode->exists()) {
			throw new NotFoundException(__('Invalid rscode'));
		}
		if ($this->Rscode->delete()) {
			$this->Session->setFlash(__('Rscode deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rscode was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
