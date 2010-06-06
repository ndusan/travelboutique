<?php

class LoginController extends Controller{
	
/**
	 * Login page
	 * @return unknown_type
	 */
	public function index(){
		
		if(isset($_SESSION['tb']) && !empty($_SESSION['tb'])) parent::redirect('admin'.DS.'home', '');
	}	
	
	/**
	 * Submit login page
	 * @param $params
	 * @return void
	 */
	public function submit($params){

		if($usr = $this->db->getLoginUser($params)){
			
			$_SESSION['tb'] = $usr;
			parent::redirect('admin'.DS.'home', '');
		} 
		else parent::redirect('admin', 'login');
	}
	
	/**
	 * Logout
	 * @param array $params
	 * @return void
	 */
	public function logout(){

		unset($_SESSION['tb']);
		parent::redirect('admin', '');
	}
}