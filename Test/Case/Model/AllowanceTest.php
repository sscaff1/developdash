<?php
App::uses('Allowance', 'Model');

/**
 * Allowance Test Case
 *
 */
class AllowanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.allowance',
		'app.payment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Allowance = ClassRegistry::init('Allowance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Allowance);

		parent::tearDown();
	}

}
