<?php
App::uses('AdsAppModel', 'Ads.Model');
/**
 * AdsPlacement Model
 *
 * @property AdsBanner $AdsBanner
 * @property AdsPlaceholder $AdsPlaceholder
 */
class AdsPlacement extends AdsAppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AdsBanner' => array(
			'className' => 'Ads.AdsBanner',
			'foreignKey' => 'ads_banner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AdsPlaceholder' => array(
			'className' => 'Ads.AdsPlaceholder',
			'foreignKey' => 'ads_placeholder_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function getRandomByPlaceholderId($id){
		$now = date('Y-m-d H:i:s');
		$placement = $this->find('first', array(
			'contain'    => array('AdsBanner', 'AdsPlaceholder'),
			'conditions' => array(
				'AdsPlacement.ads_placeholder_id' => $id,
				'AdsPlacement.enabled'            => true,
				'AdsPlacement.start <= NOW()' ,
				'AdsPlacement.end >= NOW()',
			),
			'order' => 'RAND()'
		));

		if(!empty($placement))
			$this->updateAll(array('AdsPlacement.view_count'=>'AdsPlacement.view_count+1'), array('AdsPlacement.id'=>$placement['AdsPlacement']['id']));

		return $placement;
	}

}
