<?php

class LoginModel extends Model{
	
	/**
	 * Get user
	 * @param array $params
	 * @return array or boolean
	 */
	public function getLoginUser($params){
		
		$query = sprintf("SELECT * FROM `users` WHERE `email`='%s' AND `password`=PASSWORD('%s')",
						mysql_real_escape_string($params['email']),
						mysql_real_escape_string($params['password'])
						);
		
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		
		return mysql_fetch_assoc($res);
		
	}
}