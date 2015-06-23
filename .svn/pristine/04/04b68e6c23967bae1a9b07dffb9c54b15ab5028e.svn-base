<?php
App::uses('KeyDate', 'Model');

/**
 * KeyDate Test Case
 *
 */
class KeyDateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.key_date',
		'app.budget',
		'app.project',
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
		$this->KeyDate = ClassRegistry::init('KeyDate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KeyDate);

		parent::tearDown();
	}

}
