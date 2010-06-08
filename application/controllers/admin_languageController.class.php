<?php

class Admin_languageController extends Controller{
	
	public function index(){
		
		parent::set('langs', $this->db->getLanguage());
	}
	
	public function edit($params){
		
		$this->db->edit($params);
		parent::redirect('admin'.DS.'language', 'success');
	}
}