<?php
App::uses('AppController', 'Controller');
/**
 * Curves Controller
 *
 * @property Curve $Curve
 * @property PaginatorComponent $Paginator
 */
class CurvesController extends AppController {

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
		$this->Curve->recursive = 0;
		$this->set('curves', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Curve->exists($id)) {
			throw new NotFoundException(__('Invalid curve'));
		}
		$options = array('conditions' => array('Curve.' . $this->Curve->primaryKey => $id));
		$this->set('curve', $this->Curve->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Curve->create();
			if ($this->Curve->save($this->request->data)) {
				$this->Session->setFlash(__('The curve has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curve could not be saved. Please, try again.'));
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
		if (!$this->Curve->exists($id)) {
			throw new NotFoundException(__('Invalid curve'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Curve->save($this->request->data)) {
				$this->Session->setFlash(__('The curve has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curve could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Curve.' . $this->Curve->primaryKey => $id));
			$this->request->data = $this->Curve->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Curve->id = $id;
		if (!$this->Curve->exists()) {
			throw new NotFoundException(__('Invalid curve'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Curve->delete()) {
			$this->Session->setFlash(__('The curve has been deleted.'));
		} else {
			$this->Session->setFlash(__('The curve could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
