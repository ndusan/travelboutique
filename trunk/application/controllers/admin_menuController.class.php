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
	
	public function up($params){
		parent::userInfoAndSession();
		
		$this->db->up($params);
		
		header("Location: ".BASE_PATH.'admin'.DS.'menu', 'success');
	}
	
	public function down($params){
		parent::userInfoAndSession();
		
		$this->db->down($params);
		
		header("Location: ".BASE_PATH.'admin'.DS.'menu', 'success');
	}
}