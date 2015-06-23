<?php
App::uses('AppController', 'Controller');
/**
 * TaxCredits Controller
 *
 * @property TaxCredit $TaxCredit
 * @property PaginatorComponent $Paginator
 */
class TaxCreditsController extends AppController {

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
		$this->TaxCredit->recursive = 0;
		$this->set('taxCredits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TaxCredit->exists($id)) {
			throw new NotFoundException(__('Invalid tax credit'));
		}
		$options = array('conditions' => array('TaxCredit.' . $this->TaxCredit->primaryKey => $id));
		$this->set('taxCredit', $this->TaxCredit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TaxCredit->create();
			if ($this->TaxCredit->save($this->request->data)) {
				$this->Session->setFlash(__('The tax credit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax credit could not be saved. Please, try again.'));
			}
		}
		$budgets = $this->TaxCredit->Budget->find('list');
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
		if (!$this->TaxCredit->exists($id)) {
			throw new NotFoundException(__('Invalid tax credit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TaxCredit->save($this->request->data)) {
				$this->Session->setFlash(__('The tax credit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax credit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TaxCredit.' . $this->TaxCredit->primaryKey => $id));
			$this->request->data = $this->TaxCredit->find('first', $options);
		}
		$budgets = $this->TaxCredit->Budget->find('list');
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
		$this->TaxCredit->id = $id;
		if (!$this->TaxCredit->exists()) {
			throw new NotFoundException(__('Invalid tax credit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TaxCredit->delete()) {
			$this->Session->setFlash(__('The tax credit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tax credit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
