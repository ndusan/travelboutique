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
		parent::set('partners', $this->db->getPartners());
		
		parent::set('submenu', 'pages');
		
	}
	
	public function submit($params){
		parent::userInfoAndSession();

		if($this->db->submit($params)) parent::redirect('admin'.DS.'pages', 'success');
		else parent::redirect('admin'.DS.'pages'.DS.'add', 'error');
	}
	
	public function submit_static($params){
		parent::userInfoAndSession();

		if($this->db->submit_static($params)) parent::redirect('admin'.DS.'pages', 'success');
		else parent::redirect('admin'.DS.'pages'.DS.'add', 'error');
	}
	
	public function edit($params){
		parent::userInfoAndSession();
		
		parent::set('page', $this->db->getPage($params));
		
		parent::set('langs', $this->db->getLanguages());
		
		parent::set('levels', $this->db->getLevels());
		parent::set('partners', $this->db->getPagePartners($params));
		
		parent::set('params', $params);
		
		parent::set('submenu', 'pages');
	}
	
	public function edit_static($params){
		parent::userInfoAndSession();
		
		parent::set('page', $this->db->getStaticPage($params));
		parent::set('langs', $this->db->getLanguages());
		
		
		parent::set('params', $params);
		
		parent::defaultJs(array('tiny_mce'.DS.'tiny_mce'));
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
		
		parent::set('morePages', $this->db->getMorePage($params));
		
		parent::defaultJs(array('tiny_mce'.DS.'tiny_mce'));
		
		if(isset($params['item_id'])){
			$getItem = $this->db->getItem($params);
			parent::set('item', $getItem);
		}
		parent::set('params', $params);
	}
	
	public function submitMore($params){
		parent::userInfoAndSession();
		
		if($folder = $this->db->submitMore($params)){

			//Upload files if entered
			for($i=0; $i<3; $i++){
				$fileTag = 'file'.$i;
				if($params[$fileTag]['error'] == 0){
					
					//Create dir if not exists
					if(!is_dir(UPLOAD_PATH.$folder)) mkdir(UPLOAD_PATH.$folder, 0777);
					//Put value in dir
					move_uploaded_file($params[$fileTag]['tmp_name'], UPLOAD_PATH.$folder.DS.$params[$fileTag]['name']);
				}
			}
			parent::redirect('admin'.DS.'pages'.DS.$params['id'].DS.'more', 'success');
		}else parent::redirect('admin'.DS.'pages'.DS.$params['id'].DS.'more', 'error');
	}
	
	public function deleteMore($params){
		parent::userInfoAndSession();
		
		$folder = $this->db->getFolder($params);
		if(is_dir(UPLOAD_PATH.$folder['folder'])) rmdir(UPLOAD_PATH.$folder['folder']);
		
		$this->db->removeItem($params);
		parent::redirect('admin'.DS.'pages'.DS.$params['id'].DS.'more', 'success');
	}
	
	
	public function up($params){
		parent::userInfoAndSession();
		
		$this->db->up($params);
		parent::redirect('admin'.DS.'pages'.DS.$params['id'].DS.'more', 'success');
	}
	
	public function down($params){
		parent::userInfoAndSession();
		
		$this->db->down($params);
		parent::redirect('admin'.DS.'pages'.DS.$params['id'].DS.'more', 'success');
	}

}