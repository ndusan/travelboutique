<?php

class DynamicModel extends Model{
	
	public function getPage($params){
		
		$query = sprintf("SELECT `pages`.*, `page_info`.`name` FROM `pages` 
							INNER JOIN `page_info` ON `pages`.`id`=`page_info`.`page_id`
							WHERE `pages`.`link`='%s' AND `pages`.`active`='1' AND `pages`.`parent_id`='0'",
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
	
	public function getDetails($pageId, $lang){
		
		$query = sprintf("SELECT `page_items`.`folder`, `page_item_details`.* FROM `page_items`
							INNER JOIN `page_item_details` ON `page_items`.`id`=`page_item_details`.`page_item_id`
							WHERE `page_items`.`page_id`='%s' AND `page_item_details`.`language_id`=
								(SELECT `id` FROM `languages` WHERE `name`='%s')",
						mysql_real_escape_string($pageId),
						mysql_real_escape_string($lang)
						);
						
		return parent::query($query);
	}
	
	public function getDynamicPages($langId){
		
		$query = sprintf("SELECT `pages`.`link`, `page_info`.`name` FROM `pages` INNER JOIN `page_info`
							ON `pages`.`id`=`page_info`.`page_id` WHERE 
							`page_info`.`language_id`=(SELECT `id` FROM `languages` WHERE `name`='%s') 
							AND `pages`.`active`='1' AND `pages`.`checked`='1'",
						mysql_real_escape_string($langId)
						);
						
		return parent::query($query);
	}
	
}