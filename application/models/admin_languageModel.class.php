<?php

class Admin_languageModel extends Model{
	
	public function getLanguage(){
		
		$query = sprintf("SELECT * FROM `languages`");
		return parent::query($query);
	}
	
	public function edit($params){
		
		$query = sprintf("UPDATE `languages` SET `active`='%s' WHERE `id`='%s'",
						mysql_real_escape_string($params['active']),
						mysql_real_escape_string($params['id'])
						);
		mysql_query($query);
	}
}