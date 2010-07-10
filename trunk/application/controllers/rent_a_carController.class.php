<?php

class Rent_a_carController extends Controller{
	
	public function index($params){
		
		//Get all info about page
		parent::set('getPageInfo', $this->db->getPageInfo($params, $this->lng));
		parent::set('dynamicPages', $this->db->dynamicPages($params, $this->lng));
		
		parent::set('active', 'rent-a-car');
		
		parent::defaultCss(array('datepicker'));
		parent::defaultJs(array('rent_a_car', 'ui.datepicker'));
	}
	
	public function submit($params){
		
		$this->db->setRequest($params);
		
		//Send on email as well
		$string = "Rent a car\n";
		foreach($params['rent-a-car'] as $key => $val) $string .= $key.": ".$val."\n";
		
		@mail("info@travelboutique.rs", "Rent a car - zahtev", $string, "From: noreplay@travelboutique.rs");
		
		parent::redirect('rent-a-car', 'success');
		
	}
}