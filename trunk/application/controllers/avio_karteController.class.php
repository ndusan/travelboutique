<?php

class Avio_karteController extends Controller{
	
	public function index($params){
		
		//Get all info about page
		parent::set('getPageInfo', $this->db->getPageInfo($params, $this->lng));
		parent::set('dynamicPages', $this->db->dynamicPages($params, $this->lng));

		parent::set('active', 'avio-karte');
		
		parent::defaultCss(array('datepicker'));
		parent::defaultJs(array('avio_karte', 'ui.datepicker'));
	}
	
	public function submit($params){
		
		$this->db->setRequest($params);
		
		//Send on email as well
		$string = "Avio karte\n";
		foreach($params['avio_karte'] as $key => $val) $string .= $key.": ".$val."\n";
		
		@mail("info@travelboutique.rs", "Avio karte - zahtev", $string, "From: noreplay@travelboutique.rs");
		
		parent::redirect('avio-karte', 'success');
		
	}
}