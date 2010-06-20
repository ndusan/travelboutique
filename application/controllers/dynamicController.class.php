<?php

class DynamicController extends Controller{
	
	
	public function page($params){
		
		$getPage = $this->db->getPage($params);
		
		if(!$getPage) header("Location:". BASE_PATH, 'error');
		
		
		//Get data
		parent::set('template', $getPage['template']);
	}
	
}