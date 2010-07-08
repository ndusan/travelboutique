<?php

class Admin_voucherController extends Controller{
	
	public function index($params){
		parent::userInfoAndSession();
		
		parent::set('response', $this->db->getVoucher());
		parent::set('submenu', 'voucher');
		parent::set('lang', $this->db->getLang());
		
		parent::defaultJs(array('tiny_mce'.DS.'tiny_mce'));
	}
	
	public function submit($params){
		parent::userInfoAndSession();
		
		$this->db->setVoucher($params);
		parent::redirect('admin'.DS.'voucher', 'success');
	}
}