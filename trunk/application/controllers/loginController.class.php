<?php

class LoginController extends Controller{
	
/**
	 * Login page
	 * @return unknown_type
	 */
	function index(){}	
	
	/**
	 * Submit login page
	 * @param $params
	 * @return void
	 */
	function submit($params){
		if($this->db->getLoginUser($params)) parent::redirect('admin', '');
		else parent::redirect('', 'error');
	}
}