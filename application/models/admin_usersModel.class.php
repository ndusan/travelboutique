<?php

class Admin_usersModel extends Model{
	
	
	public function getUsers(){
		
		$query = sprintf("SELECT * FROM `users` WHERE `active`='1'");
		return parent::query($query);
	}
	
	public function getUser($params){
		
		$query = sprintf("SELECT * FROM `users` WHERE `active`='1' AND `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		$response = parent::query($query);
		return $response[0];
	}
	
	public function submit($params){
		
		if(isset($params['id']) && !empty($params['id'])){
			//Edit
			
			$query = sprintf("UPDATE `users` SET `firstname`='%s', `lastname`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($params['firstname']),
							mysql_real_escape_string($params['lastname']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
			//Check if password entered
			if(!empty($params['password'])){
				$query = sprint("UPDATE `users` SET `password`=PASSWORD('%s') WHERE `id`='%s'",
								mysql_real_escape_string($params['password']),
								mysql_real_escape_string($params['id'])
								);
				mysql_query($query);
			}
			
			return true;
		}else{
			//Add
			
			//Check if email in use
			$query_email = sprintf("SELECT * FROM `users` WHERE `email`='%s'",
									mysql_real_escape_string($params['email'])	
									);
			$res_email = mysql_query($query_email);
			
			if(mysql_num_rows($res_email) <= 0){
				
				$query = sprintf("INSERT INTO `users` SET `firstname`='%s', `lastname`='%s', `email`='%s', `password`=PASSWORD('%s')",
							mysql_real_escape_string($params['firstname']),
							mysql_real_escape_string($params['lastname']),
							mysql_real_escape_string($params['email']),
							mysql_real_escape_string($params['password'])
							);
				mysql_query($query);
				
				return true;
			}else return false;
		}
	}
	
	public function delete($params){
		
		$query = sprintf("UPDATE `users` SET `active`='0' WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		mysql_query($query);
	}
}