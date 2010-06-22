<?php

class DynamicModel extends Model{
	
	public function getPageInfo($params, $langId){
		$pageStage = "";
		
		//Check if this page has child
		if(isset($params['childName']) && !empty($params['childName'])){
			
			//Find this page if exists
			$query = sprintf("SELECT * FROM `pages` WHERE `link`='%s' AND `parent_id`!='0'",
							mysql_real_escape_string($params['childName'])
							);
			$resChild = mysql_query($query);
			
			if(mysql_num_rows($resChild) <= 0) return false;
			$pageInfo = mysql_fetch_assoc($resChild);
			$pageStage = "child";
			
		}elseif(isset($params['parentName']) && !empty($params['parentName'])){
		
			//Find this page if exists
			$query = sprintf("SELECT * FROM `pages` WHERE `link`='%s' AND `parent_id`='0'",
							mysql_real_escape_string($params['parentName'])
							);
			$resParent = mysql_query($query);
			
			if(mysql_num_rows($resParent) <= 0) return false;
			$pageInfo = mysql_fetch_assoc($resParent);
			$pageStage = "parent";
			
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
							WHERE `page_items`.`page_id`='%s' AND `page_item_details`.`language_id`=(SELECT `id` FROM `languages` WHERE `name`='%s')",
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
		$bannerOutput = array();
		switch($pageStage){
			case "child":
							//Find all baners connected to this parent
							$query_banner = sprintf("SELECT `banners`.*, `pages`.`link` FROM `banners` INNER JOIN
													`pages` ON `pages`.`id`=`banners`.`page_id`
													WHERE `pages`.`parent_id`='%s'
													AND `pages`.`id`!='%s' ORDER BY `banners`.`id` DESC LIMIT 0, 4",
													mysql_real_escape_string($pageInfo['parent_id']),
													mysql_real_escape_string($pageInfo['id'])
													);
													
							$res_banner = mysql_query($query_banner);
							if(mysql_num_rows($res_banner) > 0){
								//Find parent link
								$query_l = sprintf("SELECT `link` FROM `pages` WHERE `id`='%s'",
												mysql_real_escape_string($pageInfo['parent_id'])
												);
								$row_l = mysql_fetch_assoc(mysql_query($query_l));
								while($row_banner = mysql_fetch_assoc($res_banner)){
									$row_banner['parent_link'] = $row_l['link'];
									$bannerOutput[] = $row_banner;
								}
							}
							break;
			case "parent":
							//Find all baners connected to this parent
							$query_banner = sprintf("SELECT `banners`.`id`, `banners`.`title`, `banners`.`file`, `pages`.`link` AS `parent_link` FROM `banners` 
													INNER JOIN `pages` ON `pages`.`id`=`banners`.`page_id` WHERE `pages`.`id`!='%s'	LIMIT 0, 4",
													mysql_real_escape_string($pageInfo['id'])
													);
							$res_banner = mysql_query($query_banner);
							if(mysql_num_rows($res_banner) > 0){
								while($row_banner = mysql_fetch_assoc($res_banner)) $bannerOutput[] = $row_banner;
							}
							break;
		}
		$output = array_merge($output, array('banners' => $bannerOutput));
						
		//print_r($output);
		return $output;
	}
	
}