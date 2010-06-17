<?php

class Admin_carouselController extends Controller{
	
	public function index(){
		parent::userInfoAndSession();
		parent::set('carousel', $this->db->getCarousel());
		
		parent::set('submenu', 'carousel');
	}
	
	public function add(){
		parent::userInfoAndSession();
		
		parent::set('submenu', 'carousel');
		parent::set('pages', $this->db->getPages());
		
	}
	
	public function submit($params){
		parent::userInfoAndSession();
		
		$fileId = $this->db->submit($params);
		
		if($params['file']['error'] == 0){
			move_uploaded_file($params['file']['tmp_name'], UPLOAD_PATH.'carousel'.DS.$fileId."-".$params['file']['name']);
			chmod(UPLOAD_PATH.'carousel'.DS.$fileId."-".$params['file']['name'], 0775);
		}
		
		parent::redirect('admin'.DS.'carousel', 'success');
	}
	
	public function delete($params){
		parent::userInfoAndSession();
		
		$file = $this->db->delete($params);
		
		@unlink(UPLOAD_PATH.'carousel'.DS.$file['id']."-".$file['file']);
		parent::redirect('admin'.DS.'carousel', 'success');
	}
	
	public function edit($params){
		parent::userInfoAndSession();
		
		parent::set('carousel', $this->db->getTheCarousel($params));
		parent::set('params', $params);
		
		parent::set('submenu', 'carousel');
		
		
	}
}