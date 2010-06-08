<?php

class Admin_pagesModel extends Model{
	
	public function getPages(){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `active`='1'");
		return parent::query($query);
	}
	
	public function getLanguages(){
		
		$query = sprintf("SELECT * FROM `languages` WHERE `active`='1'");
		return parent::query($query);		
	}
	
	public function getLevels(){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `active`='1'");
		return parent::query($query);
	}
}