<?php
App::uses('AppController', 'Controller');
/**
 * RentTypes Controller
 *
 * @property RentType $RentType
 * @property PaginatorComponent $Paginator
 */
class RentTypesController extends AppController {

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
		$this->RentType->recursive = 0;
		$this->set('rentTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RentType->exists($id)) {
			throw new NotFoundException(__('Invalid rent type'));
		}
		$options = array('conditions' => array('RentType.' . $this->RentType->primaryKey => $id));
		$this->set('rentType', $this->RentType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RentType->create();
			if ($this->RentType->save($this->request->data)) {
				$this->Session->setFlash(__('The rent type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rent type could not be saved. Please, try again.'));
			}
		}
		$budgets = $this->RentType->Budget->find('list');
		$this->set(compact('budgets'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RentType->exists($id)) {
			throw new NotFoundException(__('Invalid rent type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RentType->save($this->request->data)) {
				$this->Session->setFlash(__('The rent type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rent type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RentType.' . $this->RentType->primaryKey => $id));
			$this->request->data = $this->RentType->find('first', $options);
		}
		$budgets = $this->RentType->Budget->find('list');
		$this->set(compact('budgets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RentType->id = $id;
		if (!$this->RentType->exists()) {
			throw new NotFoundException(__('Invalid rent type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RentType->delete()) {
			$this->Session->setFlash(__('The rent type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rent type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
