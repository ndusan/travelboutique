<?php

class Admin_newslettersController extends Controller{
	
	public function index($params){
		parent::userInfoAndSession();
		//Get all info about page
		parent::set('newsletters', $this->db->getUsers($params));
		parent::set('submenu', 'newsletters');
	}
}