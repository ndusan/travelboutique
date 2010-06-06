<?php

class DynamicController extends Controller{
	
	
	public function parentPage($params){
		
		print_r($params);
	}
	
	public function childPage($params){
		
		print_r($params);
	}
}