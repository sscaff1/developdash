<?php
/**
 * PaymentTypeFixture
 *
 */
class PaymentTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'budget_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'key_date_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'budget_id' => 1,
			'key_date_id' => 1,
			'name' => 1,
			'created' => '2014-11-07 13:14:31',
			'modified' => '2014-11-07 13:14:31'
		),
	);

}
