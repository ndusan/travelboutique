<?php

class Admin_bannersController extends Controller{
	
	public function index(){
		parent::userInfoAndSession();
		parent::set('banners', $this->db->getBanners());
		
		parent::set('submenu', 'banners');
	}
	
	public function add(){
		parent::userInfoAndSession();
		
		parent::set('submenu', 'banners');
		parent::set('pages', $this->db->getPages());
		
		parent::defaultJs(array('admin_banners'));
	}
	
	public function submit($params){
		parent::userInfoAndSession();
		
		$fileId = $this->db->submit($params);
		
		if($params['file']['error'] == 0){
			move_uploaded_file($params['file']['tmp_name'], UPLOAD_PATH.'banners'.DS.$fileId."-".$params['file']['name']);
			chmod(UPLOAD_PATH.'banners'.DS.$fileId."-".$params['file']['name'], 0775);
		}
		
		parent::redirect('admin'.DS.'banners', 'success');
	}
	
	public function delete($params){
		parent::userInfoAndSession();
		
		$file = $this->db->delete($params);
		
		@unlink(UPLOAD_PATH.'banners'.DS.$file['id']."-".$file['file']);
		parent::redirect('admin'.DS.'banners', 'success');
	}
	
	public function edit($params){
		parent::userInfoAndSession();
		
		parent::set('pages', $this->db->getPages());
		parent::set('banner', $this->db->getBanner($params));
		parent::set('params', $params);
		
		parent::set('submenu', 'banners');
		
		parent::defaultJs(array('admin_banners'));
	}
	
}