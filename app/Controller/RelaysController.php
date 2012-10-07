<?php
App::uses('AppController', 'Controller');
/**
 * Relays Controller
 *
 * @property Relay $Relay
 */
class RelaysController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Relay->recursive = 0;
		$this->set('relays', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Relay->id = $id;
		if (!$this->Relay->exists()) {
			throw new NotFoundException(__('Invalid relay'));
		}
		$this->set('relay', $this->Relay->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Relay->create();
			if ($this->Relay->save($this->request->data)) {
				$this->Session->setFlash(__('The relay has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relay could not be saved. Please, try again.'));
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
		$this->Relay->id = $id;
		if (!$this->Relay->exists()) {
			throw new NotFoundException(__('Invalid relay'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Relay->save($this->request->data)) {
				$this->Session->setFlash(__('The relay has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relay could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Relay->read(null, $id);
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
		$this->Relay->id = $id;
		if (!$this->Relay->exists()) {
			throw new NotFoundException(__('Invalid relay'));
		}
		if ($this->Relay->delete()) {
			$this->Session->setFlash(__('Relay deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Relay was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
