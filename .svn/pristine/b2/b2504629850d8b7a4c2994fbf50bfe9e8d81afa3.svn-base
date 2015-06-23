<?php
App::uses('Curve', 'Model');

/**
 * Curve Test Case
 *
 */
class CurveTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.curve',
		'app.payment_type',
		'app.budget',
		'app.project',
		'app.state',
		'app.key_date',
		'app.payment',
		'app.tax_credit',
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
		$this->Curve = ClassRegistry::init('Curve');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Curve);

		parent::tearDown();
	}

}
