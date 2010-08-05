<?php

class DynamicController extends Controller{
	
	
	public function page($params){
		
		if(isset($params['parentName']) && !empty($params['parentName'])){
			//đ Đ
			$params['parentName'] = str_replace("%C4%91", "đ", $params['parentName']);
			$params['parentName'] = str_replace("%C4%90", "Đ", $params['parentName']);
			//š Š
			$params['parentName'] = str_replace("%C5%A1", "š", $params['parentName']);
			$params['parentName'] = str_replace("%C5%A0", "Š", $params['parentName']);
			//č Č
			$params['parentName'] = str_replace("%C4%8D", "č", $params['parentName']);
			$params['parentName'] = str_replace("%C4%8C", "Č", $params['parentName']);
			//ć Ć
			$params['parentName'] = str_replace("%C4%87", "ć", $params['parentName']);
			$params['parentName'] = str_replace("%C4%86", "Ć", $params['parentName']);
			//ž Ž
			$params['parentName'] = str_replace("%C5%BE", "ž", $params['parentName']);
			$params['parentName'] = str_replace("%C5%BD", "Ž", $params['parentName']);
		}
		
		if(isset($params['childName']) && !empty($params['childName'])){
			//đ Đ
			$params['childName'] = str_replace("%C4%91", "đ", $params['childName']);
			$params['childName'] = str_replace("%C4%90", "Đ", $params['childName']);
			//š Š
			$params['childName'] = str_replace("%C5%A1", "š", $params['childName']);
			$params['childName'] = str_replace("%C5%A0", "Š", $params['childName']);
			//č Č
			$params['childName'] = str_replace("%C4%8D", "č", $params['childName']);
			$params['childName'] = str_replace("%C4%8C", "Č", $params['childName']);
			//ć Ć
			$params['childName'] = str_replace("%C4%87", "ć", $params['childName']);
			$params['childName'] = str_replace("%C4%86", "Ć", $params['childName']);
			//ž Ž
			$params['childName'] = str_replace("%C5%BE", "ž", $params['childName']);
			$params['childName'] = str_replace("%C5%BD", "Ž", $params['childName']);
		}
		
		//Get all info about page
		parent::set('getPageInfo', $this->db->getPageInfo($params, $this->lng));
		
		parent::set('dynamicPages', $this->db->dynamicPages($params, $this->lng));
		
		parent::set('active', $params['parentName']);
	}	
}