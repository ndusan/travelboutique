<?php

class DynamicController extends Controller{
	
	
	public function page($params){
		
		//Get all info about page
		parent::set('getPageInfo', $this->db->getPageInfo($params, $this->lng));
		
		parent::set('dynamicPages', $this->db->dynamicPages($params, $this->lng));
	}	
}