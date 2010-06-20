<?php

class DynamicModel extends Model{
	
	public function getPage($params){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `link`='%s' AND `active`='1' AND `parent_id`='0'",
						mysql_real_escape_string($params['parentName'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) <= 0) return false;
		
		$row = mysql_fetch_assoc($res);
		//Check for children
		
		if(isset($params['childName']) && !empty($params['childName'])){
			
			$query = sprintf("SELECT * FROM `pages` WHERE `parent_id`='%s' AND `link`='%s'",
						mysql_real_escape_string($row['id']),
						mysql_real_escape_string($params['childName'])
						);
			$res_c = mysql_query($query);
			if(mysql_num_rows($res_c) > 0){
				$row_c = mysql_fetch_assoc($res_c);
				$row = array_merge($row, array('child' => $row_c));
			}
		}
		return $row;
	}
}