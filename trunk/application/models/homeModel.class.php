<?php

class HomeModel extends Model{
	
	public function getPageInfo($params, $langId){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `link`='home'");
		$resChild = mysql_query($query);
		
		if(mysql_num_rows($resChild) <= 0) return false;
		$pageInfo = mysql_fetch_assoc($resChild);
			
		$output = array();
		
		//Page name
		$query = sprintf("SELECT `name` FROM `page_info` WHERE `language_id`=(SELECT `id` FROM `languages` WHERE `name`='%s') AND `page_id`='%s'",
						mysql_real_escape_string($langId),
						mysql_real_escape_string($pageInfo['id'])
						);
		$rowTmp = mysql_fetch_assoc(mysql_query($query));
		
		$output = array('id' => $pageInfo['id'], 'link' => $pageInfo['link'], 'parent_id' => $pageInfo['parent_id'], 'name' => $rowTmp['name'], 'template' => $pageInfo['template'], 'link' => $pageInfo['link']);
		
		//Items
		$query = sprintf("SELECT * FROM `static_page_item_details` WHERE `page_id`='%s' AND `language_id`=(SELECT `id` FROM `languages` WHERE `name`='%s')",
						mysql_real_escape_string($pageInfo['id']),
						mysql_real_escape_string($langId)
						);
		$tmpOutput = array();
		$resTmp = mysql_query($query);
		
		if(mysql_num_rows($resTmp) > 0){
			while($rowTmp = mysql_fetch_assoc($resTmp)) $tmpOutput[] = $rowTmp;
			$output = array_merge($output, array('items' => $tmpOutput));
		}
		
		//Get carousel
		$query = sprintf("SELECT * FROM `carousel`");
		$resPar = mysql_query($query);
		if(mysql_num_rows($resPar) > 0){
			
			$parOutput = array();
			while($rowPar = mysql_fetch_assoc($resPar)){
				//Get path
				$query_path = sprintf("SELECT `id`, `link`, `parent_id` FROM `pages` WHERE `id`='%s'",
									mysql_real_escape_string($rowPar['page_id'])
									);
				$row_path = mysql_fetch_assoc(mysql_query($query_path));
				if($row_path['parent_id'] > 0){
					//Find parent
					$query_path2 = sprintf("SELECT `link` FROM `pages` WHERE `id`='%s'",
										mysql_real_escape_string($row_path['parent_id'])
										);	
					$row_path2 = mysql_fetch_assoc(mysql_query($query_path2));
					$rowPar = array_merge($rowPar, array('parent_link' => $row_path2['link'], 'link' => $row_path['link']));
				}else $rowPar = array_merge($rowPar, array('parent_link' => $row_path['link']));
				$parOutput[] = $rowPar;
			} 
			$output = array_merge($output, array('carousel' => $parOutput));
		}
		
		//Get banners
		$output = array_merge($output, array('banners' => self::getBanners($pageInfo, $langId)));
						
		//print_r($output);
		return $output;
	}
	
	public function getBanners($pageInfo, $langId){
		
		$tmpOutput = array();
		$query_l = sprintf("SELECT `link` FROM `pages` WHERE `id`='%s'",
						mysql_real_escape_string($pageInfo['id'])
						);
		$row_l = mysql_fetch_assoc(mysql_query($query_l));
		
		//Get if it's parent of child
		if($pageInfo['parent_id'] > 0){
			
			//Child
			$query_banner = sprintf("SELECT `banners`.*, `pages`.`link` FROM `banners` INNER JOIN
									`pages` ON `pages`.`id`=`banners`.`page_id`
									WHERE `pages`.`parent_id`='%s'
									AND `pages`.`id`!='%s' ORDER BY `banners`.`id` DESC LIMIT 0, 4",
									mysql_real_escape_string($pageInfo['parent_id']),
									mysql_real_escape_string($pageInfo['id'])
									);
			$res_banner = mysql_query($query_banner);
			$numOfBanners = mysql_num_rows($res_banner);
			if($numOfBanners > 0)
				while($row_banner = mysql_fetch_assoc($res_banner)){
					$row_banner['parent_link'] = $row_l['link'];
					$tmpOutput[] = $row_banner;
				} 
			if($numOfBanners < 4){
				
				//Add some extra banners
				$query_extra = sprintf("SELECT `banners`.`id`, `banners`.`title`, `banners`.`file`, `pages`.`link` FROM `banners` 
										INNER JOIN `pages` ON `pages`.`id`=`banners`.`page_id` WHERE `pages`.`id`!='%s' AND `pages`.`parent_id`='%s'
										LIMIT 0, %s",
										mysql_real_escape_string($pageInfo['id']),
										mysql_real_escape_string(0),
										mysql_real_escape_string(4 - $numOfBanners)
										);
				$res_extra = mysql_query($query_extra);
				if(mysql_num_rows($res_extra) > 0)
					while($row_extra = mysql_fetch_assoc($res_extra)) $tmpOutput[] = $row_extra;
			}
		}else{
			
			//Parent
			$query_banner = sprintf("SELECT `banners`.`id`, `banners`.`title`, `banners`.`file`, `pages`.`link` FROM `banners` 
									INNER JOIN `pages` ON `pages`.`id`=`banners`.`page_id` WHERE `pages`.`parent_id`='%s'	LIMIT 0, 4",
									mysql_real_escape_string($pageInfo['id'])
									);
						
			$res_banner = mysql_query($query_banner);
			$numOfBanners = mysql_num_rows($res_banner);
			if($numOfBanners > 0)
				while($row_banner = mysql_fetch_assoc($res_banner)){
					$row_banner['parent_link'] = $row_l['link'];
					$tmpOutput[] = $row_banner;
				} 
			if($numOfBanners < 4){
				
				//Add some extra banners
				$query_extra = sprintf("SELECT `banners`.`id`, `banners`.`title`, `banners`.`file`, `pages`.`link` AS `parent_link` FROM `banners` 
										INNER JOIN `pages` ON `pages`.`id`=`banners`.`page_id` WHERE `pages`.`id`!='%s' AND `pages`.`parent_id`='%s'	
										LIMIT 0, %s",
										mysql_real_escape_string($pageInfo['id']),
										mysql_real_escape_string(0),
										mysql_real_escape_string(4 - $numOfBanners)
										);
				$res_extra = mysql_query($query_extra);
				if(mysql_num_rows($res_extra) > 0)
					while($row_extra = mysql_fetch_assoc($res_extra)) $tmpOutput[] = $row_extra;
			}
		}
		
		return $tmpOutput;
	}
	
	public function dynamicPages($params, $lang){
		
		$query = sprintf("SELECT `pages`.*, `page_info`.`name` FROM `pages` INNER JOIN `page_info`
							ON `pages`.`id`=`page_info`.`page_id`
							WHERE `pages`.`checked`='1' AND `page_info`.`language_id`=(SELECT `id` FROM `languages` WHERE `name`='%s')",
						mysql_real_escape_string($lang)
						);
		return parent::query($query);
	}
	
	public function submitNews($params){
		
		$query = sprintf("SELECT * FROM `newsletters` WHERE `email`='%s'",
						mysql_real_escape_string($params['email'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) > 0) return false;
		
		//Store in DB
		$query = sprintf("INSERT INTO `newsletters` SET `email`='%s'",
						mysql_real_escape_string($params['email'])
						);
		$res = mysql_query($query);
		return true;
	}
}