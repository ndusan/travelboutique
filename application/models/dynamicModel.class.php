<?php

class DynamicModel extends Model{
	
	public function getPageInfo($params, $langId){
		
		//Check if this page has child
		if(isset($params['childName']) && !empty($params['childName'])){
			
			//Find this page if exists
			$query = sprintf("SELECT * FROM `pages` WHERE `link`='%s' AND `parent_id`!='0'",
							mysql_real_escape_string($params['childName'])
							);
			$resChild = mysql_query($query);
			
			if(mysql_num_rows($resChild) <= 0) return false;
			$pageInfo = mysql_fetch_assoc($resChild);
			
			
		}elseif(isset($params['parentName']) && !empty($params['parentName'])){
		
			//Find this page if exists
			$query = sprintf("SELECT * FROM `pages` WHERE `link`='%s' AND `parent_id`='0'",
							mysql_real_escape_string($params['parentName'])
							);
			$resParent = mysql_query($query);
			
			if(mysql_num_rows($resParent) <= 0) return false;
			$pageInfo = mysql_fetch_assoc($resParent);
			
			
		}else return false;
		
		$output = array();
		
		//Page name
		$query = sprintf("SELECT `name` FROM `page_info` WHERE `language_id`=(SELECT `id` FROM `languages` WHERE `name`='%s') AND `page_id`='%s'",
						mysql_real_escape_string($langId),
						mysql_real_escape_string($pageInfo['id'])
						);
		$rowTmp = mysql_fetch_assoc(mysql_query($query));
		
		$output = array('id' => $pageInfo['id'], 'link' => $pageInfo['link'], 'parent_id' => $pageInfo['parent_id'], 'name' => $rowTmp['name'], 'template' => $pageInfo['template'], 'link' => $pageInfo['link']);
		
		//Items
		$query = sprintf("SELECT `page_items`.`folder`, `page_item_details`.`title`, `page_item_details`.`content`
							FROM `page_items` INNER JOIN `page_item_details` ON
									`page_items`.`id`=`page_item_details`.`page_item_id`
							WHERE `page_items`.`page_id`='%s' AND `page_item_details`.`language_id`=(SELECT `id` FROM `languages` WHERE `name`='%s')
							ORDER BY `page_items`.`position` DESC",
						mysql_real_escape_string($pageInfo['id']),
						mysql_real_escape_string($langId)
						);
						
		$tmpOutput = array();
		$resTmp = mysql_query($query);
		
		if(mysql_num_rows($resTmp) > 0){
			while($rowTmp = mysql_fetch_assoc($resTmp)) $tmpOutput[] = $rowTmp;
			$output = array_merge($output, array('items' => $tmpOutput));
		}
		
		//Add children if there are any
		$query = sprintf("SELECT `pages`.*, `page_info`.`name` FROM `pages`
							INNER JOIN `page_info` ON `page_info`.`page_id`=`pages`.`id`
							WHERE `pages`.`parent_id`='%s' AND `pages`.`type`='%s'
							AND `page_info`.`language_id`=(SELECT `id` FROM `languages` WHERE `name`='%s')",
						mysql_real_escape_string($pageInfo['id']),
						mysql_real_escape_string('dynamic'),
						mysql_real_escape_string($langId)
						);
				
		$resCh = mysql_query($query);
		if(mysql_num_rows($resCh) > 0){
			$chOutput = array();
			while($rowCh = mysql_fetch_assoc($resCh)) $chOutput[] = $rowCh;
			$output = array_merge($output, array('children' => $chOutput));
		}
		//Get partners for this page
		$query = sprintf("SELECT `partners`.`id`, `partners`.`link`, `partners`.`file` FROM `partners` INNER JOIN `page_partners` ON
							`partners`.`id`=`page_partners`.`partner_id` WHERE `page_partners`.`page_id`='%s'",
						mysql_real_escape_string($pageInfo['id'])
						);
		$resPar = mysql_query($query);
		if(mysql_num_rows($resPar) > 0){
			
			$parOutput = array();
			while($rowPar = mysql_fetch_assoc($resPar)) $parOutput[] = $rowPar;
			$output = array_merge($output, array('partners' => $parOutput));
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
			
			$query_l = sprintf("SELECT `link` FROM `pages` WHERE `id`='%s'",
						mysql_real_escape_string($pageInfo['parent_id'])
						);
			$row_l = mysql_fetch_assoc(mysql_query($query_l));
			
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
							WHERE `pages`.`checked`='1' AND `page_info`.`language_id`=(SELECT `id` FROM `languages` WHERE `name`='%s') ORDER BY `pages`.`position` DESC",
						mysql_real_escape_string($lang)
						);
		return parent::query($query);
	}
	
}