<?php
/**
 * AdsPlaceholderFixture
 *
 */
class AdsPlaceholderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'width' => array('type' => 'integer', 'null' => false, 'default' => null),
		'height' => array('type' => 'integer', 'null' => false, 'default' => null),
		'enabled' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'width' => 1,
			'height' => 1,
			'enabled' => 1,
			'created' => '2013-05-23 21:41:40',
			'modified' => '2013-05-23 21:41:40'
		),
	);

}
