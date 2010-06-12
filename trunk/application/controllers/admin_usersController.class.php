<?php


class Admin_usersController extends Controller{
	
	public function add($params){
		parent::userInfoAndSession();
		
		parent::set('submenu', 'users');
	}
	
	public function index($params){
		parent::userInfoAndSession();
		
		//Get all users from DB
		$users = $this->db->getUsers();
		parent::set('users', $users);
		
		parent::set('submenu', 'users');
	}
	
	public function edit($params){
		parent::userInfoAndSession();
		
		//Get user from DB
		$user = $this->db->getUser($params);
		parent::set('user', $user);
		
		
		parent::set('submenu', 'users');
	}
	
	public function submit($params){
		parent::userInfoAndSession();
		
		//Submit data
		if($res = $this->db->submit($params)) parent::redirect('admin'.DS.'users', 'success');
		else parent::redirect('admin'.DS.'users'.DS.'add', 'email');
		
	}
	
	public function delete($params){
		parent::userInfoAndSession();
		
		//Submit data
		$this->db->delete($params);
		parent::redirect('admin'.DS.'users', 'success');
		
	}
	
}