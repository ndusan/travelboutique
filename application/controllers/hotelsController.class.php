<?php
class HotelsController extends Controller{
	
	public function index($params){
		
		//Get all info about page
		parent::set('getPageInfo', $this->db->getPageInfo($params, $this->lng));
		parent::set('dynamicPages', $this->db->dynamicPages($params, $this->lng));
		
		parent::set('active', 'hotels');
		parent::set('extra', $this->db->extra($params, $this->lng));
		parent::defaultCss(array('datepicker'));
		parent::defaultJs(array('hotels', 'ui.datepicker'));
	}
	
	public function submit($params){
		
		$this->db->setRequest($params);
		
		//Send on email as well
		$string = "Hoteli\n";
		foreach($params['hotels'] as $key => $val) $string .= $key.": ".$val."\n";
		
		@mail("info@travelboutique.rs", "Hoteli - zahtev", $string, "From: noreplay@travelboutique.rs");
		
		parent::redirect('hotels', 'success');
		
	}
}