<?php

class Avio_karteController extends Controller{
	
	public function index($params){
		
		//Get all info about page
		parent::set('getPageInfo', $this->db->getPageInfo($params, $this->lng));
		
		parent::set('dynamicPages', $this->db->dynamicPages($params, $this->lng));
		
		parent::set('active', 'avio-karte');
	}
}