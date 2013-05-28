<?php
App::uses('AdsAppModel', 'Ads.Model');
/**
 * AdsCampaign Model
 *
 * @property User $User
 * @property AdsBanner $AdsBanner
 */
class AdsCampaign extends AdsAppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		'AdsBanner' => array(
			'className' => 'Ads.AdsBanner',
			'foreignKey' => 'ads_campaign_id',
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
