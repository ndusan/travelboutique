<?php

class Admin_pagesController extends Controller{
	
	public function index(){
		
		parent::set('pages', $this->db->getPages());
	}
	
	public function add(){
		
		parent::set('langs', $this->db->getLanguages());
		
		parent::set('levels', $this->db->getLevels());
		
	}
	
	public function submit($params){
		
		if($this->db->submit($params)) parent::redirect('admin'.DS.'pages', 'success');
		else parent::redirect('admin'.DS.'pages'.DS.'add', 'error');
	}
	
	public function edit($params){
		
		parent::set('page', $this->db->getPage($params));
		
		parent::set('langs', $this->db->getLanguages());
		
		parent::set('levels', $this->db->getLevels());
		
		parent::set('params', $params);
	}
	
	public function update($params){
		
		if($this->db->update($params)) parent::redirect('admin'.DS.'pages', 'success');
		else parent::redirect('admin'.DS.'pages'.DS.'add', 'error');
	}
}