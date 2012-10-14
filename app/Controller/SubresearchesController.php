<?php
App::uses('AppController', 'Controller');
/**
 * Subresearches Controller
 *
 * @property Subresearch $Subresearch
 */
class SubresearchesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subresearch->recursive = 0;
		$this->set('subresearches', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subresearch->id = $id;
		if (!$this->Subresearch->exists()) {
			throw new NotFoundException(__('Invalid subresearch'));
		}
		$this->set('subresearch', $this->Subresearch->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subresearch->create();
			if ($this->Subresearch->save($this->request->data)) {
				$this->Session->setFlash(__('The subresearch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subresearch could not be saved. Please, try again.'));
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
		$this->Subresearch->id = $id;
		if (!$this->Subresearch->exists()) {
			throw new NotFoundException(__('Invalid subresearch'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subresearch->save($this->request->data)) {
				$this->Session->setFlash(__('The subresearch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subresearch could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subresearch->read(null, $id);
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
		$this->Subresearch->id = $id;
		if (!$this->Subresearch->exists()) {
			throw new NotFoundException(__('Invalid subresearch'));
		}
		if ($this->Subresearch->delete()) {
			$this->Session->setFlash(__('Subresearch deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subresearch was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
