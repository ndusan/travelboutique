<?php

class Admin_pagesModel extends Model{
	
	public function getPages(){
		
		$query = sprintf("SELECT * FROM `pages` WHERE `active`='1' ORDER BY `id` DESC");
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		
		$output = array();
		while($row = mysql_fetch_assoc($res)){
			if($row['parent_id'] > 0){
				$query_ch = sprintf("SELECT `link` FROM `pages` WHERE `id`='%s'",
									mysql_real_escape_string($row['parent_id'])
									);
				$res_ch = mysql_query($query_ch);
				if(mysql_num_rows($res_ch) > 0 ){
					$row_ch = mysql_fetch_assoc($res_ch);
					$row['level'] = $row_ch['link'];
				} 
			}
			$output[] = $row;
		}
		return $output;
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
	
	public function getStaticPage($params){
		
		$query = sprintf("SELECT * FROM `static_page_item_details` WHERE `page_id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) <= 0) return false;
		$output = array();
		while($row = mysql_fetch_assoc($res)){
			$output[$row['language_id']] = $row; 
		}
		
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
		
		$query = sprintf("INSERT INTO `pages` SET `parent_id`='%s', `template`='%s', `link`='%s', `type`='dynamic', `position`='%s'",
						mysql_real_escape_string($params['level']),
						mysql_real_escape_string($params['template']),
						mysql_real_escape_string($link),
						mysql_real_escape_string(time())
						);
		$pageId = parent::insert($query);
		
		//Add page details
		foreach($params['name'] as $key => $val){
			
			$query = sprintf("INSERT INTO `page_info` SET `page_id`='%s', `name`='%s', `language_id`='%s', `additional`='%s'",
							mysql_real_escape_string($pageId),
							mysql_real_escape_string($val),
							mysql_real_escape_string($params['language'][$key]),
							mysql_real_escape_string($params['additional'][$key])
							);
			mysql_query($query);
		}
		
		//Add partners
		if(isset($params['partner']) && !empty($params['partner'])){
			foreach($params['partner'] as $val){
				
				$query = sprintf("INSERT INTO `page_partners` SET `page_id`='%s', `partner_id`='%s'",
								mysql_real_escape_string($pageId),
								mysql_real_escape_string($val)
								);
				mysql_query($query);
			}
			
		}
		return true;
	}
	
	public function submit_static($params){
		
		foreach($params['name'] as $key => $name){
			
			//Check if this is in or not
			$query = sprintf("SELECT * FROM `static_page_item_details` WHERE `page_id`='%s' AND `language_id`='%s'",
							mysql_real_escape_string($params['id']),
							mysql_real_escape_string($key)
							);
			$res = mysql_query($query);
			
			if(mysql_num_rows($res) <= 0){
				
				//Insert 
				$query = sprintf("INSERT INTO `static_page_item_details` SET `title`='%s', `content`='%s', `additional`='%s', `language_id`='%s',  `page_id`='%s'",
								mysql_real_escape_string($name),
								mysql_real_escape_string($params['content'][$key]),
								mysql_real_escape_string($params['additional'][$key]),
								mysql_real_escape_string($key),
								mysql_real_escape_string($params['id'])
								);
				mysql_query($query);
			}else{
				
				//Update
				$query = sprintf("UPDATE `static_page_item_details` SET `title`='%s', `content`='%s', `additional`='%s'  WHERE `language_id`='%s' AND `page_id`='%s'",
								mysql_real_escape_string($name),
								mysql_real_escape_string($params['content'][$key]),
								mysql_real_escape_string($params['additional'][$key]),
								mysql_real_escape_string($key),
								mysql_real_escape_string($params['id'])
								);
				mysql_query($query);
				
			}
			
		
		}
		
		return true;
	}
	
	public function update($params){
		
		$link = "";
		//Collect serbian name if there is
		if(isset($params['name']['sr']) && !empty($params['name']['sr'])){

			$link = $params['name']['sr'];
		}elseif(isset($params['name']['en']) && !empty($params['name']['en'])){
			
			$link = $params['name']['en'];
		}
		
		//If there is a request to change name of page it should be done here
		$query_old = sprintf("SELECT * FROM `pages` WHERE `id`='%s'",
							mysql_real_escape_string($params['id'])
							);
		$res_old = mysql_query($query_old);
		$row_old = mysql_fetch_assoc($res_old);
		
		if($row_old['link'] != $link){
			
			//Request to change name
			$link = self::createLink($link);
		
			if(!$link) return false;
		}
		
		$query = sprintf("UPDATE `pages` SET `link`='%s', `parent_id`='%s', `template`='%s', `type`='dynamic' WHERE `id`='%s'",
						mysql_real_escape_string($link),
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
			
			$query = sprintf("INSERT INTO `page_info` SET `page_id`='%s', `name`='%s', `language_id`='%s', `additional`='%s'",
							mysql_real_escape_string($params['id']),
							mysql_real_escape_string($val),
							mysql_real_escape_string($params['language'][$key]),
							mysql_real_escape_string($params['additional'][$key])
							);
			mysql_query($query);
		}
		
		//Delete
		$query = sprintf("DELETE FROM `page_partners` WHERE `page_id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		mysql_query($query);
		
		//Add page details
		foreach($params['partner'] as $val){
			
			$query = sprintf("INSERT INTO `page_partners` SET `page_id`='%s', `partner_id`='%s'",
							mysql_real_escape_string($params['id']),
							mysql_real_escape_string($val)
							);
			mysql_query($query);
		}
		return true;
	}
	
	public function submitMore($params){
		
		if(isset($params['item_id']) && !empty($params['item_id'])){
			$query = sprintf("SELECT `id`, `folder` FROM `page_items` WHERE `id`='%s'",
								mysql_real_escape_string($params['item_id'])
								);
			$res = mysql_query($query);
			$row = mysql_fetch_assoc($res);
			
		foreach($params['title'] as $lang_id => $val){
				
				$query = sprintf("UPDATE `page_item_details` SET `title`='%s', `content`='%s'
									WHERE `language_id`='%s' AND `page_item_id`='%s'",
								mysql_real_escape_string($val),
								mysql_real_escape_string($params['content'][$lang_id]),
								mysql_real_escape_string($lang_id),
								mysql_real_escape_string($row['id'])
								);
				mysql_query($query);
			}
			$folder = $row['folder'];
		}else{
		$folder = time();
			$query = sprintf("INSERT INTO `page_items` SET  `page_id`='%s', `folder`='%s', `position`='%s'",
								mysql_real_escape_string($params['id']),
								mysql_real_escape_string($folder),
								mysql_real_escape_string(time())
								);
			$itemId = parent::insert($query);
			foreach($params['title'] as $lang_id => $val){
				
				$query = sprintf("INSERT INTO `page_item_details` SET `title`='%s', `language_id`='%s', `content`='%s', `page_item_id`='%s'",
								mysql_real_escape_string($val),
								mysql_real_escape_string($lang_id),
								mysql_real_escape_string($params['content'][$lang_id]),
								mysql_real_escape_string($itemId)
								);
				mysql_query($query);
			}
		}
		
		return $folder;
	}
	
	public function getMorePage($params){
		
		$query = sprintf("SELECT * FROM `page_items` WHERE `page_id`='%s'  ORDER BY `position` DESC",
						mysql_real_escape_string($params['id'])
						);
		return parent::query($query);
	}
	
	public function getItem($params){
		$output = array();
		
		$query = sprintf("SELECT  `page_items`.`folder`, `page_item_details`.* FROM `page_items`
							INNER JOIN `page_item_details` ON `page_items`.`id`=`page_item_details`.`page_item_id` 
							WHERE `page_items`.`id`='%s'",
						mysql_real_escape_string($params['item_id'])
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		
		while($row = mysql_fetch_assoc($res)){
			$output[$row['language_id']] = $row;
		}
		return $output;
	}
	
	public function getFolder($params){
		
		$query = sprintf("SELECT `folder` FROM `page_items` WHERE `id`='%s'",
						mysql_real_escape_string($params['item_id'])
						);
		$res = parent::query($query);
		return $res[0];
	}
	
	public function removeItem($params){
		
		$query = sprintf("DELETE FROM `page_item_details` WHERE `page_item_id`='%s'",
						mysql_real_escape_string($params['item_id'])
						);
		mysql_query($query);
		
		$query = sprintf("DELETE FROM `page_items` WHERE `id`='%s'",
						mysql_real_escape_string($params['item_id'])
						);
		mysql_query($query);
		return true;
	}
	
	public function up($params){
		
		$query = sprintf("SELECT * FROM `page_items` WHERE `page_id`='%s' AND `id`!='%s' AND
						 `position`>='%s' ORDER BY `position` ASC LIMIT 0, 1",
						mysql_real_escape_string($params['id']),
						mysql_real_escape_string($params['item_id']),
						mysql_real_escape_string($params['position'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) > 0){
			
			$row = mysql_fetch_assoc($res);
			//Switch places
			$query = sprintf("UPDATE `page_items` SET `position`='%s' WHERE `id`='%s' AND `page_id`='%s'",
							mysql_real_escape_string($row['position']),
							mysql_real_escape_string($params['item_id']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
			$query = sprintf("UPDATE `page_items` SET `position`='%s' WHERE `id`='%s' AND `page_id`='%s'",
							mysql_real_escape_string($params['position']),
							mysql_real_escape_string($row['id']),
							mysql_real_escape_string($row['page_id'])
							);
			mysql_query($query);
		}
		return true;
	}
	
	public function down($params){
		
		$query = sprintf("SELECT * FROM `page_items` WHERE `page_id`='%s' AND `id`!='%s' AND
						 `position`<='%s' ORDER BY `position` DESC LIMIT 0, 1",
						mysql_real_escape_string($params['id']),
						mysql_real_escape_string($params['item_id']),
						mysql_real_escape_string($params['position'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) > 0){
			
			$row = mysql_fetch_assoc($res);
			//Switch places
			$query = sprintf("UPDATE `page_items` SET `position`='%s' WHERE `id`='%s' AND `page_id`='%s'",
							mysql_real_escape_string($row['position']),
							mysql_real_escape_string($params['item_id']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);
			
			$query = sprintf("UPDATE `page_items` SET `position`='%s' WHERE `id`='%s' AND `page_id`='%s'",
							mysql_real_escape_string($params['position']),
							mysql_real_escape_string($row['id']),
							mysql_real_escape_string($row['page_id'])
							);
			mysql_query($query);
		}
		return true;
	}
	
	public function getPartners(){
		
		$query = sprintf("SELECT * FROM `partners` ORDER BY `id` DESC");

		return parent::query($query);
	}
	
	public function getPagePartners($params){
		
		$query = sprintf("SELECT * FROM `partners` ORDER BY `id` DESC");
		$res = mysql_query($query);
		
		if(mysql_num_rows($res) <= 0) return false;
		$output = array();
		
		while($row = mysql_fetch_assoc($res)){
			
			$query_ch = sprintf("SELECT * FROM `page_partners` WHERE `page_id`='%s' AND `partner_id`='%s'",
								mysql_real_escape_string($params['id']),
								mysql_real_escape_string($row['id'])
								);
			$res_ch = mysql_query($query_ch);
			if(mysql_num_rows($res_ch) > 0){
				$row = array_merge($row, array('checked' => 1));
			}else $row = array_merge($row, array('checked' => 0));
			$output[] = $row;
		}
		
		return $output;
	}
	
	public function delete($params){
		
		//Remove partners connection
		$queryPartner = sprintf("DELETE FROM `page_partners` WHERE `page_id`='%s'",
								mysql_real_escape_string($params['id'])
								);
		mysql_query($queryParent);

		//Remove banners
		$queryBanners = sprintf("DELETE FROM `banners` WHERE `page_id`='%s'",
								mysql_real_escape_string($params['id'])
								);
		mysql_query($queryBanners);
		
		//Remove carousel
		$queryCarousel = sprintf("DELETE FROM `carousel` WHERE `page_id`='%s'",
								mysql_real_escape_string($params['id'])
								);
		mysql_query($queryCarousel);
	
		//Remove page
		$queryItems = sprintf("DELETE FROM `page_item_details` WHERE `page_item_id` IN (SELECT `id` FROM `page_items` WHERE `page_id`='%s')",
							mysql_real_escape_string($params['id'])
							);
		mysql_query($queryItems);
		$queryItems = sprintf("DELETE FROM `page_items` WHERE `page_id`='%s'",
							mysql_real_escape_string($params['id'])
							);
		mysql_query($queryItems);

		$queryPage = sprintf("DELETE FROM `pages` WHERE `id`='%s'",
							mysql_real_escape_string($params['id'])
							);
		mysql_query($queryPage);
		//Remove parent id to this page
		$queryParent = sprintf("UPDATE `pages` SET `parent_id`='0' WHERE `parent_id`='%s'",
								mysql_real_escape_string($params['id'])
								);
		mysql_query($queryParent);
		
		return true;
	}
	
}