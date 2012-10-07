<?php
App::uses('AppController', 'Controller');
/**
 * Evaluates Controller
 *
 * @property Evaluate $Evaluate
 */
class EvaluatesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Evaluate->recursive = 0;
		$this->set('evaluates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Evaluate->id = $id;
		if (!$this->Evaluate->exists()) {
			throw new NotFoundException(__('Invalid evaluate'));
		}
		$this->set('evaluate', $this->Evaluate->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evaluate->create();
			if ($this->Evaluate->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluate could not be saved. Please, try again.'));
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
		$this->Evaluate->id = $id;
		if (!$this->Evaluate->exists()) {
			throw new NotFoundException(__('Invalid evaluate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Evaluate->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluate could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Evaluate->read(null, $id);
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
		$this->Evaluate->id = $id;
		if (!$this->Evaluate->exists()) {
			throw new NotFoundException(__('Invalid evaluate'));
		}
		if ($this->Evaluate->delete()) {
			$this->Session->setFlash(__('Evaluate deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evaluate was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
