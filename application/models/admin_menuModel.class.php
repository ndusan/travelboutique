<?php

class Admin_menuModel extends Model{
	
	public function getPages(){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `type`='dynamic' AND `parent_id`='0' ORDER BY `position` DESC");
		
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
	
	public function up($params){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `parent_id`='0' AND `id`!='%s' AND
						 `position`>='%s' AND `active`='1' AND `checked`='1' ORDER BY `position` ASC LIMIT 0, 1",
						mysql_real_escape_string($params['id']),
						mysql_real_escape_string($params['position'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) > 0){
			
			$row = mysql_fetch_assoc($res);
			//Switch places
			$query = sprintf("UPDATE `pages` SET `position`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($row['position']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
			$query = sprintf("UPDATE `pages` SET `position`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($params['position']),
							mysql_real_escape_string($row['id'])
							);
			mysql_query($query);
		}
		return true;
	}
	
	public function down($params){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `parent_id`='0' AND `id`!='%s' AND
						 `position`<='%s' AND `active`='1' AND `checked`='1' ORDER BY `position` DESC LIMIT 0, 1",
						mysql_real_escape_string($params['id']),
						mysql_real_escape_string($params['position'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) > 0){
			
			$row = mysql_fetch_assoc($res);
			//Switch places
			$query = sprintf("UPDATE `pages` SET `position`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($row['position']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
			$query = sprintf("UPDATE `pages` SET `position`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($params['position']),
							mysql_real_escape_string($row['id'])
							);
			mysql_query($query);
		}
		return true;
	}
}