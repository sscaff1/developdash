<?php
/**
 * TaxCreditFixture
 *
 */
class TaxCreditFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'budget_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'credit_rate' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '11,4', 'unsigned' => false),
		'sale_price' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '11,4', 'unsigned' => false),
		'sale_percent' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '11,4', 'unsigned' => false),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'credit_rate' => '',
			'sale_price' => '',
			'sale_percent' => '',
			'created' => '2014-11-07 13:16:00',
			'modified' => '2014-11-07 13:16:00'
		),
	);

}
