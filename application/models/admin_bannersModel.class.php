<?php

class Admin_bannersModel extends Model{
	
	public function getBanners(){
		
		$query = sprintf("SELECT `banners`.*, `pages`.`link` FROM `banners` 
							INNER JOIN `pages` ON `pages`.`id`=`banners`.`page_id` 
							ORDER BY `banners`.`position` DESC");
		
		return parent::query($query);
	}
	
	public function getBanner($params){
		
		$query = sprintf("SELECT `banners`.*, `pages`.`link` FROM `banners` 
							INNER JOIN `pages` ON `pages`.`id`=`banners`.`page_id` 
							WHERE `banners`.`id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		
		$res = mysql_query($query);
		return mysql_fetch_assoc($res);
	}
	
	public function getPages(){
		
		$query = sprintf("SELECT * FROM `pages` ORDER BY `id` DESC");
		return parent::query($query);
	}
	
	public function submit($params){
		
		if(isset($params['id']) && !empty($params['id'])){
			
			$query = sprintf("UPDATE `banners` SET `title`='%s', `page_id`='%s'
								WHERE `id`='%s'",
							mysql_real_escape_string($params['title']),
							mysql_real_escape_string($params['page']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
			if($params['file']['error'] == 0){
				
				//Upload file
				$query = sprintf("UPDATE `banners` SET `file`='%s' WHERE `id`='%s'",
								mysql_real_escape_string($params['file']['name']),
								mysql_real_escape_string($params['id'])
								);
				mysql_query($query);
			}
			$id = $params['id'];
		}else{
		
			$query = sprintf("INSERT INTO `banners` SET `title`='%s', `file`='%s', `page_id`='%s'",
							mysql_real_escape_string($params['title']),
							mysql_real_escape_string($params['file']['name']),
							mysql_real_escape_string($params['page'])
							);
			mysql_query($query);
			$id = mysql_insert_id();
		}
		
		return $id;
	}
	
	public function delete($params){
		
		$query = sprintf("SELECT * FROM `banners` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		$res = mysql_query($query);
		$row = mysql_fetch_assoc($res);
		
		$query = sprintf("DELETE FROM `banners` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		mysql_query($query);
		return $row;
	}
	
	public function up($params){
		
		$query = sprintf("SELECT * FROM `banners` WHERE `id`!='%s' AND
						 `position`>='%s' ORDER BY `position` ASC LIMIT 0, 1",
						mysql_real_escape_string($params['id']),
						mysql_real_escape_string($params['position'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) > 0){
			
			$row = mysql_fetch_assoc($res);
			//Switch places
			$query = sprintf("UPDATE `banners` SET `position`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($row['position']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
			$query = sprintf("UPDATE `banners` SET `position`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($params['position']),
							mysql_real_escape_string($row['id'])
							);
			mysql_query($query);
		}
		return true;
	}
	
	public function down($params){
		
		$query = sprintf("SELECT * FROM `banners` WHERE `id`!='%s' AND
						 `position`<='%s' ORDER BY `position` DESC LIMIT 0, 1",
						mysql_real_escape_string($params['id']),
						mysql_real_escape_string($params['position'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) > 0){
			
			$row = mysql_fetch_assoc($res);
			//Switch places
			$query = sprintf("UPDATE `banners` SET `position`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($row['position']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
			$query = sprintf("UPDATE `banners` SET `position`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($params['position']),
							mysql_real_escape_string($row['id'])
							);
			mysql_query($query);
		}
		return true;
	}
	
}