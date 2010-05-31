<?php

class HomeController extends Controller{
	
	public function index($params){
		
		//Add carousel
		parent::defaultJs(array('jquery.jcarousellite.min'));
	}
}