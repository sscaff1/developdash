<?php
/**
 * LoanFixture
 *
 */
class LoanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'budget_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'position' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'principal' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '11,2', 'unsigned' => false),
		'interest' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,10', 'unsigned' => false),
		'amortization' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6, 'unsigned' => false),
		'term' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6, 'unsigned' => false),
		'taxable' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'compound' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hardpay' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'position' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'principal' => '',
			'interest' => '',
			'amortization' => 1,
			'term' => 1,
			'taxable' => 1,
			'compound' => 'Lorem ipsum dolor ',
			'hardpay' => 1,
			'created' => '2014-11-07 13:14:27',
			'modified' => '2014-11-07 13:14:27'
		),
	);

}
