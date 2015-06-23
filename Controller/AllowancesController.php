<?php
App::uses('AppController', 'Controller');
/**
 * Allowances Controller
 *
 * @property Allowance $Allowance
 * @property PaginatorComponent $Paginator
 */
class AllowancesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Allowance->recursive = 0;
		$this->set('allowances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Allowance->exists($id)) {
			throw new NotFoundException(__('Invalid allowance'));
		}
		$options = array('conditions' => array('Allowance.' . $this->Allowance->primaryKey => $id));
		$this->set('allowance', $this->Allowance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Allowance->create();
			if ($this->Allowance->save($this->request->data)) {
				$this->Session->setFlash(__('The allowance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The allowance could not be saved. Please, try again.'));
			}
		}
		$payments = $this->Allowance->Payment->find('list');
		$this->set(compact('payments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Allowance->exists($id)) {
			throw new NotFoundException(__('Invalid allowance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Allowance->save($this->request->data)) {
				$this->Session->setFlash(__('The allowance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The allowance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Allowance.' . $this->Allowance->primaryKey => $id));
			$this->request->data = $this->Allowance->find('first', $options);
		}
		$payments = $this->Allowance->Payment->find('list');
		$this->set(compact('payments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Allowance->id = $id;
		if (!$this->Allowance->exists()) {
			throw new NotFoundException(__('Invalid allowance'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Allowance->delete()) {
			$this->Session->setFlash(__('The allowance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The allowance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
