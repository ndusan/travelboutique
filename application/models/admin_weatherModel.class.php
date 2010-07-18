<?php

class Admin_weatherModel extends Model{
	
	public function getWeather(){
		
		$query = sprintf("SELECT * FROM `weather`");
		
		return parent::query($query);
	}
	
	public function getTheWeather($params){
		
		$query = sprintf("SELECT * FROM `weather` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		
		$res = mysql_query($query);
		return mysql_fetch_assoc($res);
	}
	
	
	public function submit($params){
		
		if(isset($params['id']) && !empty($params['id'])){
			
			$query = sprintf("UPDATE `weather` SET `city`='%s', `link`='%s'
								WHERE `id`='%s'",
							mysql_real_escape_string($params['city']),
							mysql_real_escape_string($params['link']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
		}else{
		
			$query = sprintf("INSERT INTO `weather` SET `city`='%s', `link`='%s'",
							mysql_real_escape_string($params['city']),
							mysql_real_escape_string($params['link'])
							);
			mysql_query($query);
		}
		
		return $id;
	}
	
	public function delete($params){
		
		$query = sprintf("DELETE FROM `weather` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		mysql_query($query);
		return true;
	}
	
	
}