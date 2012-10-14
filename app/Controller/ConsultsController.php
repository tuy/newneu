<?php
App::uses('AppController', 'Controller');
/**
 * Consults Controller
 *
 * @property Consult $Consult
 */
class ConsultsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Consult->recursive = 0;
		$this->set('consults', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Consult->id = $id;
		if (!$this->Consult->exists()) {
			throw new NotFoundException(__('Invalid consult'));
		}
		$this->set('consult', $this->Consult->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Consult->create();
			if ($this->Consult->save($this->request->data)) {
				$this->Session->setFlash(__('The consult has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consult could not be saved. Please, try again.'));
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
		$this->Consult->id = $id;
		if (!$this->Consult->exists()) {
			throw new NotFoundException(__('Invalid consult'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Consult->save($this->request->data)) {
				$this->Session->setFlash(__('The consult has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consult could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Consult->read(null, $id);
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
		$this->Consult->id = $id;
		if (!$this->Consult->exists()) {
			throw new NotFoundException(__('Invalid consult'));
		}
		if ($this->Consult->delete()) {
			$this->Session->setFlash(__('Consult deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Consult was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
