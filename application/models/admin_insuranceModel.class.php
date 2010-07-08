<?php

class Admin_insuranceModel extends Model{

	public function getInsurance(){
		$query = sprintf("SELECT `extra_details`.* FROM `extra_details` INNER JOIN `extra` 
							ON `extra_details`.`extra_id`=`extra`.`id` WHERE 
							`extra`.`type`='%s'",
						mysql_real_escape_string('insurance')
						);
						
		$res = mysql_query($query);
		$tmp = array();
		if(mysql_num_rows($res) <= 0) return false;
		
		while($row = mysql_fetch_assoc($res)) $tmp[$row['language_id']] = $row;
		return $tmp;
	}
	
	public function setInsurance($params){

		$query = sprintf("SELECT `id` FROM `extra` WHERE `type`='%s'",
						mysql_real_escape_string($params['type'])
						);
		$res = mysql_query($query);
		$row = mysql_fetch_assoc($res);
		
		//Drop
		$query = sprintf("DELETE FROM `extra_details` WHERE `extra_id`='%s'",
						mysql_real_escape_string($row['id'])
						);
		mysql_query($query);
		
		foreach($params['title'] as $key => $tit){
			$query = sprintf("INSERT INTO `extra_details` SET `title`='%s', `content`='%s', `language_id`='%s', `extra_id`='%s'",
							mysql_real_escape_string($tit),
							mysql_real_escape_string($params['content'][$key]),
							mysql_real_escape_string($key),
							mysql_real_escape_string($row['id'])
							);
							
			mysql_query($query);
		}
		
		return true;
	}
	
	public function getLang(){
		
		$query = sprintf("SELECT * FROM `languages` WHERE `active`='1'");
		
		$tmp = array();
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
	
		while($row = mysql_fetch_assoc($res)) $tmp[] = $row;
		
		return $tmp;
	}
}