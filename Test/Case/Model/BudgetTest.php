<?php
App::uses('Budget', 'Model');

/**
 * Budget Test Case
 *
 */
class BudgetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.budget',
		'app.project',
		'app.key_date',
		'app.loan',
		'app.payment_type',
		'app.payment',
		'app.rent_type',
		'app.tax_credit',
		'app.unit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Budget = ClassRegistry::init('Budget');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Budget);

		parent::tearDown();
	}

}
