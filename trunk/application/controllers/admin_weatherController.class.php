<?php

class Admin_weatherController extends Controller{
	
	public function index(){
		parent::userInfoAndSession();
		parent::set('weather', $this->db->getWeather());
		
		parent::set('submenu', 'weather');
	}
	
	public function add(){
		parent::userInfoAndSession();
		
		parent::set('submenu', 'weather');
		
		parent::defaultJs(array('admin_weather'));
	}
	
	public function submit($params){
		parent::userInfoAndSession();
		
		$fileId = $this->db->submit($params);
		
		parent::redirect('admin'.DS.'weather', 'success');
	}
	
	public function delete($params){
		parent::userInfoAndSession();
		
		$file = $this->db->delete($params);
		
		parent::redirect('admin'.DS.'weather', 'success');
	}
	
	public function edit($params){
		parent::userInfoAndSession();
		
		parent::set('weather', $this->db->getTheWeather($params));
		parent::set('params', $params);

		parent::set('submenu', 'weather');
		
		parent::defaultJs(array('admin_weather'));
	}
	
}