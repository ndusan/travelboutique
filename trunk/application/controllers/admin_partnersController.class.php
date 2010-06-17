<?php

class Admin_partnersController extends Controller{
	
	public function index(){
		parent::userInfoAndSession();
		parent::set('partners', $this->db->getPartners());
		
		parent::set('submenu', 'partners');
	}
	
	public function add(){
		parent::userInfoAndSession();
		
		parent::set('submenu', 'partners');
		
	}
	
	public function submit($params){
		parent::userInfoAndSession();
		
		$fileId = $this->db->submit($params);
		
		if($params['file']['error'] == 0){
			move_uploaded_file($params['file']['tmp_name'], UPLOAD_PATH.'partners'.DS.$fileId."-".$params['file']['name']);
			chmod(UPLOAD_PATH.'partners'.DS.$fileId."-".$params['file']['name'], 0775);
		}
		
		parent::redirect('admin'.DS.'partners', 'success');
	}
	
	public function delete($params){
		parent::userInfoAndSession();
		
		$file = $this->db->delete($params);
		
		@unlink(UPLOAD_PATH.'partners'.DS.$file['id']."-".$file['file']);
		parent::redirect('admin'.DS.'partners', 'success');
	}
	
	public function edit($params){
		parent::userInfoAndSession();
		
		parent::set('partner', $this->db->getPartner($params));
		
		parent::set('params', $params);
		
		parent::set('submenu', 'partners');
	}
	
}