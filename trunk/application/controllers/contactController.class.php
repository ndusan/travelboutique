<?php

class ContactController extends Controller{
	
	public function index($params){
		
		//Get all info about page
		parent::set('getPageInfo', $this->db->getPageInfo($params, $this->lng));
		parent::set('dynamicPages', $this->db->dynamicPages($params, $this->lng));

		parent::set('active', 'contact');
		parent::set('extra', $this->db->extra($params, $this->lng));
		parent::defaultJs(array('contact'));
	}
	
	public function submit($params){
		
		$this->db->setRequest($params);
		
		//Send on email as well
		$string = "Contact\n";
		foreach($params['contact'] as $key => $val) $string .= $key.": ".$val."\n";
		
		@mail("info@travelboutique.rs", "Kontakt forma", $string, "From: noreplay@travelboutique.rs");
		
		parent::redirect('contact', 'success');
		
	}
}