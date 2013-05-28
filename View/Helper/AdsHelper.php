<?php 

class AdsHelper extends AppHelper{

	public $helpers = array('Html');

	public function banner($id){
		$Placeholder = ClassRegistry::init('Ads.AdsPlaceholder');
		if(!$Placeholder->exists($id)) return;

		$placeholder = $Placeholder->findById($id);
		if(!$placeholder['AdsPlaceholder']['enabled']) return;
		
		$Placement = ClassRegistry::init('Ads.AdsPlacement');
		$banner = $Placement->getRandomByPlaceholderId($id);

		if(empty($banner))
			return $this->Html->image('http://placehold.it/'.$placeholder['AdsPlaceholder']['width'].'x'.$placeholder['AdsPlaceholder']['height'].'&text=Your+ad+here');



		return $this->Html->link(
			$this->Html->image($banner['AdsBanner']['image']), 
			array('plugin'=>'ads', 'controller'=>'ads_placements', 'action'=>'click', $banner['AdsPlacement']['id']),
			array('escape'=>false, 'title'=>$banner['AdsBanner']['name'])
		);
		
	
	}

}