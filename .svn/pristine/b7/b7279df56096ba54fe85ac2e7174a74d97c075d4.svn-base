<?php
/**
 * BudgetFixture
 *
 */
class BudgetFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vacancy_rate' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,10', 'unsigned' => false),
		'other_income' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,10', 'unsigned' => false),
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
			'project_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'vacancy_rate' => '',
			'other_income' => '',
			'created' => '2014-11-07 13:14:12',
			'modified' => '2014-11-07 13:14:12'
		),
	);

}
