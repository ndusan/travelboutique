<?php

class Admin_pagesModel extends Model{
	
	public function getPages(){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `active`='1'");
		return parent::query($query);
	}
	
	public function getPage($params){
		
		$output = array();
		$query = sprintf("SELECT * FROM `pages` WHERE `active`='1' AND `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		$data = parent::query($query);
		$output = $data[0];
		
		$query = sprintf("SELECT * FROM `page_info` WHERE `page_id`='%s'",
						mysql_real_escape_string($params['id'])
						);
						
		$output = array_merge($output, array('info' => parent::query($query)));
		
		return $output;
	}
	
	public function getLanguages(){
		
		$query = sprintf("SELECT * FROM `languages` WHERE `active`='1'");
		return parent::query($query);		
	}
	
	public function getLevels(){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `active`='1'");
		return parent::query($query);
	}
	
	public function createLink($link){
		
		//Remove spaces
		$link = str_replace(" ", "-", $link);

		//All lowercasse
		$link = strtolower($link);
		
		//Remove serbian letters
		$link = str_replace("š", "s", $link);
		$link = str_replace("č", "c", $link);
		$link = str_replace("ć", "c", $link);
		$link = str_replace("ž", "z", $link);
		$link = str_replace("đ", "dj", $link);
		
		$query = sprintf("SELECT * FROM `pages` WHERE `link`='%s'",
						mysql_real_escape_string($link)
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res) > 0) return false;
		return $link;
	}
	
	public function submit($params){
		
		$link = "";
		//Collect serbian name if there is
		if(isset($params['name']['sr']) && !empty($params['name']['sr'])){

			$link = $params['name']['sr'];
		}elseif(isset($params['name']['en']) && !empty($params['name']['en'])){
			
			$link = $params['name']['en'];
		}
		
		$link = self::createLink($link);
		
		if(!$link) return false;
		
		$query = sprintf("INSERT INTO `pages` SET `parent_id`='%s', `template`='%s', `link`='%s', `type`='dynamic'",
						mysql_real_escape_string($params['level']),
						mysql_real_escape_string($params['template']),
						mysql_real_escape_string($link)
						);
		$pageId = parent::insert($query);
		
		//Add page details
		foreach($params['name'] as $key => $val){
			
			$query = sprintf("INSERT INTO `page_info` SET `page_id`='%s', `name`='%s', `language_id`='%s'",
							mysql_real_escape_string($pageId),
							mysql_real_escape_string($val),
							mysql_real_escape_string($params['language'][$key])
							);
			mysql_query($query);
		}
		return true;
	}
	
	public function update($params){
		
		$query = sprintf("UPDATE `pages` SET `parent_id`='%s', `template`='%s', `type`='dynamic' WHERE `id`='%s'",
						mysql_real_escape_string($params['level']),
						mysql_real_escape_string($params['template']),
						mysql_real_escape_string($params['id'])
						);
		mysql_query($query);
		
		//Delete
		$query = sprintf("DELETE FROM `page_info` WHERE `page_id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		mysql_query($query);
		
		//Add page details
		foreach($params['name'] as $key => $val){
			
			$query = sprintf("INSERT INTO `page_info` SET `page_id`='%s', `name`='%s', `language_id`='%s'",
							mysql_real_escape_string($params['id']),
							mysql_real_escape_string($val),
							mysql_real_escape_string($params['language'][$key])
							);
			mysql_query($query);
		}
		return true;
	}
}