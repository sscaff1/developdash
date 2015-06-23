<?php
/**
 * UnitFixture
 *
 */
class UnitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'budget_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'number' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sqft' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '11,4', 'unsigned' => false),
		'beds' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'baths' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
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
			'number' => 1,
			'sqft' => '',
			'beds' => 1,
			'baths' => 1,
			'created' => '2014-11-07 13:16:03',
			'modified' => '2014-11-07 13:16:03'
		),
	);

}
