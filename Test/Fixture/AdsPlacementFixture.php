<?php
/**
 * AdsPlacementFixture
 *
 */
class AdsPlacementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ads_banner_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'ads_placeholder_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'enabled' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'start' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'end' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'view_count' => array('type' => 'integer', 'null' => false, 'default' => null),
		'click_count' => array('type' => 'integer', 'null' => false, 'default' => null),
		'view_limit' => array('type' => 'integer', 'null' => false, 'default' => null),
		'click_limit' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'ads_banner_id' => array('column' => array('ads_banner_id', 'ads_placeholder_id'), 'unique' => 0)
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
			'ads_banner_id' => 1,
			'ads_placeholder_id' => 1,
			'enabled' => 1,
			'start' => '2013-05-23 21:42:03',
			'end' => '2013-05-23 21:42:03',
			'view_count' => 1,
			'click_count' => 1,
			'view_limit' => 1,
			'click_limit' => 1,
			'created' => '2013-05-23 21:42:03',
			'modified' => '2013-05-23 21:42:03'
		),
	);

}
