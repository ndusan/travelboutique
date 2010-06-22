<?php

class Admin_carouselModel extends Model{
	
	public function getCarousel(){
		
		$query = sprintf("SELECT `carousel`.*, `pages`.`link` FROM `carousel` 
							INNER JOIN `pages` ON `pages`.`id`=`carousel`.`page_id` 
							ORDER BY `carousel`.`id` DESC");
		
		return parent::query($query);
	}
	
	public function getTheCarousel($params){
		
		$query = sprintf("SELECT `carousel`.*, `pages`.`link` FROM `carousel` 
							INNER JOIN `pages` ON `pages`.`id`=`carousel`.`page_id` 
							WHERE `carousel`.`id`='%s'",
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
			
			$query = sprintf("UPDATE `carousel` SET `title`='%s', `page_id`='%s'
								WHERE `id`='%s'",
							mysql_real_escape_string($params['title']),
							mysql_real_escape_string($params['page']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
			if($params['file']['error'] == 0){
				
				//Upload file
				$query = sprintf("UPDATE `carousel` SET `file`='%s' WHERE `id`='%s'",
								mysql_real_escape_string($params['file']['name']),
								mysql_real_escape_string($params['id'])
								);
				mysql_query($query);
			}
			$id = $params['id'];
		}else{
		
			$query = sprintf("INSERT INTO `carousel` SET `title`='%s', `file`='%s', `page_id`='%s'",
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
		
		$query = sprintf("SELECT * FROM `carousel` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		$res = mysql_query($query);
		$row = mysql_fetch_assoc($res);
		
		$query = sprintf("DELETE FROM `carousel` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		mysql_query($query);
		return $row;
	}
}