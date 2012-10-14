<?php
App::uses('AppController', 'Controller');
/**
 * Rstypes Controller
 *
 * @property Rstype $Rstype
 */
class RstypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rstype->recursive = 0;
		$this->set('rstypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Rstype->id = $id;
		if (!$this->Rstype->exists()) {
			throw new NotFoundException(__('Invalid rstype'));
		}
		$this->set('rstype', $this->Rstype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rstype->create();
			if ($this->Rstype->save($this->request->data)) {
				$this->Session->setFlash(__('The rstype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rstype could not be saved. Please, try again.'));
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
		$this->Rstype->id = $id;
		if (!$this->Rstype->exists()) {
			throw new NotFoundException(__('Invalid rstype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rstype->save($this->request->data)) {
				$this->Session->setFlash(__('The rstype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rstype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rstype->read(null, $id);
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
		$this->Rstype->id = $id;
		if (!$this->Rstype->exists()) {
			throw new NotFoundException(__('Invalid rstype'));
		}
		if ($this->Rstype->delete()) {
			$this->Session->setFlash(__('Rstype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rstype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
