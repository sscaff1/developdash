<?php
App::uses('PaymentType', 'Model');

/**
 * PaymentType Test Case
 *
 */
class PaymentTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.payment_type',
		'app.budget',
		'app.project',
		'app.key_date',
		'app.payment',
		'app.loan',
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
		$this->PaymentType = ClassRegistry::init('PaymentType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PaymentType);

		parent::tearDown();
	}

}
