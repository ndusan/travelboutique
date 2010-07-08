<?php

class Admin_insuranceController extends Controller{
	
	public function index($params){
		parent::userInfoAndSession();
		
		parent::set('response', $this->db->getInsurance());
		parent::set('submenu', 'insurence');
		parent::set('lang', $this->db->getLang());

		parent::defaultJs(array('tiny_mce'.DS.'tiny_mce'));
	}
	
	public function submit($params){
		parent::userInfoAndSession();
		$this->db->setInsurance($params);
		parent::redirect('admin'.DS.'insurance', 'success');
	}
}