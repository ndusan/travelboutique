<?php

class Admin_partnersModel extends Model{
	
	public function getPartners(){
		
		$query = sprintf("SELECT * FROM `partners` ORDER BY `id` DESC");
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		return parent::query($query);
	}
	
	public function getPartner($params){
		
		$query = sprintf("SELECT * FROM `partners` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		return mysql_fetch_assoc($res);
	}
	
	public function submit($params){
		
		if(isset($params['id']) && !empty($params)){
			//Update
			$query = sprintf("UPDATE `partners` SET `link`='%s' WHERE `id`='%s'",
						mysql_real_escape_string($params['link']),
						mysql_real_escape_string($params['id'])
						);
			mysql_query($query);
			
			if(isset($params['file']['error']) && $params['file']['error'] == 0){
				$query = sprintf("UPDATE `partners` SET `file`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($params['file']['name']),
							mysql_real_escape_string($params['id'])
							);
				mysql_query($query);	
				
			}
			return $params['id'];
			
		}else{
			//Insert
			$query = sprintf("INSERT INTO `partners` SET `file`='%s', `link`='%s'",
						mysql_real_escape_string($params['file']['name']),
						mysql_real_escape_string($params['link'])
						);
			mysql_query($query);
			return mysql_insert_id();
		}
		
	}
	
	public function delete($params){
		
		$query = sprintf("SELECT * FROM `partners` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		$res = mysql_query($query);
		$row = mysql_fetch_assoc($res);
		
		$query = sprintf("DELETE FROM `partners` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		mysql_query($query);
		return $row;
	}
}