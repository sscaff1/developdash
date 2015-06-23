<?php
App::uses('Unit', 'Model');

/**
 * Unit Test Case
 *
 */
class UnitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.unit',
		'app.budget',
		'app.project',
		'app.state',
		'app.key_date',
		'app.payment_type',
		'app.payment',
		'app.tax_credit',
		'app.loan',
		'app.frequency',
		'app.rent_type',
		'app.allowance'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Unit = ClassRegistry::init('Unit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Unit);

		parent::tearDown();
	}

}
