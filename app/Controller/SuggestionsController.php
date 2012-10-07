<?php
App::uses('AppController', 'Controller');
/**
 * Suggestions Controller
 *
 * @property Suggestion $Suggestion
 */
class SuggestionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Suggestion->recursive = 0;
		$this->set('suggestions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Suggestion->id = $id;
		if (!$this->Suggestion->exists()) {
			throw new NotFoundException(__('Invalid suggestion'));
		}
		$this->set('suggestion', $this->Suggestion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Suggestion->create();
			if ($this->Suggestion->save($this->request->data)) {
				$this->Session->setFlash(__('The suggestion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suggestion could not be saved. Please, try again.'));
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
		$this->Suggestion->id = $id;
		if (!$this->Suggestion->exists()) {
			throw new NotFoundException(__('Invalid suggestion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Suggestion->save($this->request->data)) {
				$this->Session->setFlash(__('The suggestion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suggestion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Suggestion->read(null, $id);
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
		$this->Suggestion->id = $id;
		if (!$this->Suggestion->exists()) {
			throw new NotFoundException(__('Invalid suggestion'));
		}
		if ($this->Suggestion->delete()) {
			$this->Session->setFlash(__('Suggestion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Suggestion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
