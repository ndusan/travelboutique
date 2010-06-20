<?php

class DynamicController extends Controller{
	
	
	public function page($params){
		
		$getPage = $this->db->getPage($params);

		if(!$getPage) header("Location:". BASE_PATH, 'error');
		
		parent::set('pageName', $getPage['name']);
		
		//Get page details
		$getDetails = $this->db->getDetails((isset($getPage['child']['id']) ? $getPage['child']['id'] : $getPage['id']), $this->lng);
		parent::set('getDetails', $getDetails);
		
		//Get data
		parent::set('template', $getPage['template']);
	}
	
}