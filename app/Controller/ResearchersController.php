<?php
App::uses('AppController', 'Controller');
/**
 * Researchers Controller
 *
 * @property Researcher $Researcher
 */
class ResearchersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Researcher->recursive = 0;
		$this->set('researchers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Researcher->id = $id;
		if (!$this->Researcher->exists()) {
			throw new NotFoundException(__('Invalid researcher'));
		}
		$this->set('researcher', $this->Researcher->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Researcher->create();
			if ($this->Researcher->save($this->request->data)) {
				$this->Session->setFlash(__('The researcher has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The researcher could not be saved. Please, try again.'));
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
		$this->Researcher->id = $id;
		if (!$this->Researcher->exists()) {
			throw new NotFoundException(__('Invalid researcher'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Researcher->save($this->request->data)) {
				$this->Session->setFlash(__('The researcher has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The researcher could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Researcher->read(null, $id);
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
		$this->Researcher->id = $id;
		if (!$this->Researcher->exists()) {
			throw new NotFoundException(__('Invalid researcher'));
		}
		if ($this->Researcher->delete()) {
			$this->Session->setFlash(__('Researcher deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Researcher was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
