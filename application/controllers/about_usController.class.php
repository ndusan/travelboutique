<?php

class About_usController extends Controller{
	
	public function index($params){
		
		//Get all info about page
		parent::set('getPageInfo', $this->db->getPageInfo($params, $this->lng));
		parent::set('dynamicPages', $this->db->dynamicPages($params, $this->lng));

		parent::set('extra', $this->db->extra($params, $this->lng));
		parent::set('active', 'contact');
	}
}