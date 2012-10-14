<?php
App::uses('AppController', 'Controller');
/**
 * Stypes Controller
 *
 * @property Stype $Stype
 */
class StypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Stype->recursive = 0;
		$this->set('stypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Stype->id = $id;
		if (!$this->Stype->exists()) {
			throw new NotFoundException(__('Invalid stype'));
		}
		$this->set('stype', $this->Stype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Stype->create();
			if ($this->Stype->save($this->request->data)) {
				$this->Session->setFlash(__('The stype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stype could not be saved. Please, try again.'));
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
		$this->Stype->id = $id;
		if (!$this->Stype->exists()) {
			throw new NotFoundException(__('Invalid stype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Stype->save($this->request->data)) {
				$this->Session->setFlash(__('The stype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Stype->read(null, $id);
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
		$this->Stype->id = $id;
		if (!$this->Stype->exists()) {
			throw new NotFoundException(__('Invalid stype'));
		}
		if ($this->Stype->delete()) {
			$this->Session->setFlash(__('Stype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Stype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
