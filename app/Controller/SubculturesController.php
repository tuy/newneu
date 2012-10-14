<?php
App::uses('AppController', 'Controller');
/**
 * Subcultures Controller
 *
 * @property Subculture $Subculture
 */
class SubculturesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subculture->recursive = 0;
		$this->set('subcultures', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subculture->id = $id;
		if (!$this->Subculture->exists()) {
			throw new NotFoundException(__('Invalid subculture'));
		}
		$this->set('subculture', $this->Subculture->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subculture->create();
			if ($this->Subculture->save($this->request->data)) {
				$this->Session->setFlash(__('The subculture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subculture could not be saved. Please, try again.'));
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
		$this->Subculture->id = $id;
		if (!$this->Subculture->exists()) {
			throw new NotFoundException(__('Invalid subculture'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subculture->save($this->request->data)) {
				$this->Session->setFlash(__('The subculture has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subculture could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subculture->read(null, $id);
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
		$this->Subculture->id = $id;
		if (!$this->Subculture->exists()) {
			throw new NotFoundException(__('Invalid subculture'));
		}
		if ($this->Subculture->delete()) {
			$this->Session->setFlash(__('Subculture deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subculture was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
