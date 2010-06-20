<?php

class Admin_menuController extends Controller{
	
	public function index(){
		parent::userInfoAndSession();
		parent::set('pages', $this->db->getPages());
		
		parent::set('submenu', 'menu');
	}
	
	public function set($params){
		parent::userInfoAndSession();
		
		$this->db->setPage($params);
		
		header("Location: ".BASE_PATH.'admin'.DS.'menu', 'success');
	}
}