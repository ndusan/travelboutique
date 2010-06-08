<?php

class Admin_pagesController extends Controller{
	
	public function index(){
		
		parent::set('pages', $this->db->getPages());
	}
	
	public function add(){
		
		parent::set('langs', $this->db->getLanguages());
		
		parent::set('levels', $this->db->getLevels());
		
	}
}