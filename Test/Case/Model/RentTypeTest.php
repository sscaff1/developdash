<?php
App::uses('RentType', 'Model');

/**
 * RentType Test Case
 *
 */
class RentTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rent_type',
		'app.budget',
		'app.project',
		'app.state',
		'app.key_date',
		'app.payment_type',
		'app.payment',
		'app.tax_credit',
		'app.loan',
		'app.frequency',
		'app.unit',
		'app.allowance'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RentType = ClassRegistry::init('RentType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RentType);

		parent::tearDown();
	}

}
