<?php

class DynamicController extends Controller{
	
	
	public function page($params){
		
		print_r($params);
		
		parent::set('template', 'tmp2');
	}
	
}