<?php

class Admin_menuModel extends Model{
	
	public function getPages(){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `type`='dynamic' AND `parent_id`='0'");
		
		return parent::query($query);
	}
	
	
	public function setPage($params){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		$row = mysql_fetch_assoc($res);
		
		$query = sprintf("UPDATE `pages` SET `checked`='%s' WHERE `id`='%s'",
						mysql_real_escape_string(1 - $row['checked']),
						mysql_real_escape_string($row['id'])
						);
		mysql_query($query);
		
		return true;
	}
}