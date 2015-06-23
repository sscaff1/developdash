<?php
App::uses('AppController', 'Controller');
/**
 * KeyDates Controller
 *
 * @property KeyDate $KeyDate
 * @property PaginatorComponent $Paginator
 */
class KeyDatesController extends AppController {

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
		$this->KeyDate->recursive = 0;
		$this->set('keyDates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->KeyDate->exists($id)) {
			throw new NotFoundException(__('Invalid key date'));
		}
		$options = array('conditions' => array('KeyDate.' . $this->KeyDate->primaryKey => $id));
		$this->set('keyDate', $this->KeyDate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->KeyDate->create();
			if ($this->KeyDate->save($this->request->data)) {
				$this->Session->setFlash(__('The key date has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The key date could not be saved. Please, try again.'));
			}
		}
		$budgets = $this->KeyDate->Budget->find('list');
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
		if (!$this->KeyDate->exists($id)) {
			throw new NotFoundException(__('Invalid key date'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->KeyDate->save($this->request->data)) {
				$this->Session->setFlash(__('The key date has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The key date could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('KeyDate.' . $this->KeyDate->primaryKey => $id));
			$this->request->data = $this->KeyDate->find('first', $options);
		}
		$budgets = $this->KeyDate->Budget->find('list');
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
		$this->KeyDate->id = $id;
		if (!$this->KeyDate->exists()) {
			throw new NotFoundException(__('Invalid key date'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->KeyDate->delete()) {
			$this->Session->setFlash(__('The key date has been deleted.'));
		} else {
			$this->Session->setFlash(__('The key date could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
