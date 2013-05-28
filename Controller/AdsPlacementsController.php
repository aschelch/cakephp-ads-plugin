<?php
App::uses('AdsAppController', 'Ads.Controller');
/**
 * AdsPlacements Controller
 *
 */
class AdsPlacementsController extends AdsAppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function click($id){
		$this->AdsPlacement->updateAll(array('AdsPlacement.click_count'=>'AdsPlacement.click_count+1'), array('AdsPlacement.id'=>$id));
		$this->AdsPlacement->AdsBanner->id = $id;
		$this->redirect($this->AdsPlacement->AdsBanner->field('url'));
	}

}
