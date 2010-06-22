<?php

class HomeController extends Controller{
	
	public function index($params){
		
		//Add carousel
		parent::defaultJs(array('jquery.jcarousellite.min'));
		//Get all info about page
		parent::set('getPageInfo', $this->db->getPageInfo($params, $this->lng));
		
		parent::set('dynamicPages', $this->db->dynamicPages($params, $this->lng));
	}
}