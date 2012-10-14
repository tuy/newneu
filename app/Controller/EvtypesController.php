<?php
App::uses('AppController', 'Controller');
/**
 * Evtypes Controller
 *
 * @property Evtype $Evtype
 */
class EvtypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Evtype->recursive = 0;
		$this->set('evtypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Evtype->id = $id;
		if (!$this->Evtype->exists()) {
			throw new NotFoundException(__('Invalid evtype'));
		}
		$this->set('evtype', $this->Evtype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evtype->create();
			if ($this->Evtype->save($this->request->data)) {
				$this->Session->setFlash(__('The evtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evtype could not be saved. Please, try again.'));
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
		$this->Evtype->id = $id;
		if (!$this->Evtype->exists()) {
			throw new NotFoundException(__('Invalid evtype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Evtype->save($this->request->data)) {
				$this->Session->setFlash(__('The evtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evtype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Evtype->read(null, $id);
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
		$this->Evtype->id = $id;
		if (!$this->Evtype->exists()) {
			throw new NotFoundException(__('Invalid evtype'));
		}
		if ($this->Evtype->delete()) {
			$this->Session->setFlash(__('Evtype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evtype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
