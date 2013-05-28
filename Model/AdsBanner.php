<?php
App::uses('AdsAppModel', 'Ads.Model');
/**
 * AdsBanner Model
 *
 * @property AdsCampaign $AdsCampaign
 * @property AdsPlacement $AdsPlacement
 */
class AdsBanner extends AdsAppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'name';

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'AdsCampaign' => array(
			'className' => 'Ads.AdsCampaign',
			'foreignKey' => 'ads_campaign_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'AdsPlacement' => array(
			'className' => 'Ads.AdsPlacement',
			'foreignKey' => 'ads_banner_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
