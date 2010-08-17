<?php

class Admin_newslettersModel extends Model{
	
	public function getUsers($params){
		
		$query = sprintf("SELECT * FROM `newsletters` ORDER BY `id` DESC");
		
		return parent::query($query);
		
	}
	
}