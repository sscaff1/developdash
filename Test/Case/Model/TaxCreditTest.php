<?php
App::uses('TaxCredit', 'Model');

/**
 * TaxCredit Test Case
 *
 */
class TaxCreditTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tax_credit',
		'app.budget',
		'app.project',
		'app.state',
		'app.key_date',
		'app.payment_type',
		'app.payment',
		'app.loan',
		'app.frequency',
		'app.rent_type',
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
		$this->TaxCredit = ClassRegistry::init('TaxCredit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxCredit);

		parent::tearDown();
	}

}
