<?php

class Admin_pagesController extends Controller{
	
	public function index(){
		parent::userInfoAndSession();
		parent::set('pages', $this->db->getPages());
		
		parent::set('submenu', 'pages');
	}
	
	public function add(){
		parent::userInfoAndSession();
		parent::set('langs', $this->db->getLanguages());
		
		parent::set('levels', $this->db->getLevels());
		
		parent::set('submenu', 'pages');
		
	}
	
	public function submit($params){
		parent::userInfoAndSession();
		
		if($this->db->submit($params)) parent::redirect('admin'.DS.'pages', 'success');
		else parent::redirect('admin'.DS.'pages'.DS.'add', 'error');
	}
	
	public function edit($params){
		parent::userInfoAndSession();
		
		parent::set('page', $this->db->getPage($params));
		
		parent::set('langs', $this->db->getLanguages());
		
		parent::set('levels', $this->db->getLevels());
		
		parent::set('params', $params);
		
		parent::set('submenu', 'pages');
	}
	
	public function update($params){
		parent::userInfoAndSession();
		
		if($this->db->update($params)) parent::redirect('admin'.DS.'pages', 'success');
		else parent::redirect('admin'.DS.'pages'.DS.'add', 'error');
	}
	
	public function more($params){
		parent::userInfoAndSession();

		parent::set('submenu', 'pages');
		
		parent::set('page', $this->db->getPage($params));
		parent::set('langs', $this->db->getLanguages());
		
		parent::defaultJs(array('tiny_mce'.DS.'tiny_mce'));
	}
	
	public function submitMore($params){
		
		if($this->db->submitMore($params)){
			//Upload files if entered
			
			parent::redirect('admin'.DS.'pages'.$params['id'].DS.'more', 'success');
		}
		else parent::redirect('admin'.DS.'pages'.$params['id'].DS.'more', 'error');
	}
}