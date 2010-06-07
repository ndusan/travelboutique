<?php
/**
 * HTML 
 * @author ndusan
 *
 */
class HTML{
	/**
	 * Include JS
	 * @param $fileName
	 * @return string
	 */
	function js($fileName) {
		$data = "<script src='".JS_PATH.$fileName.".js' type='text/javascript'></script>\n";
		return $data;
	}
	
	/**
	 * Custom made css
	 * @param array $array
	 * @return string
	 */
	function customCss($array){
		$string = "";
		if(isset($array) && !empty($array))
    	for($i=0; $i<count($array); $i++)
			$string .= $this->css($array[$i]);
		return $string;
	}
	
	/**
	 * Custom made js
	 * @param array $array
	 * @return string
	 */
	function customJs($array){
		$string = "";
		if(isset($array) && !empty($array))
    	for($i=0; $i<count($array); $i++)
			$string .= $this->js($array[$i]);
		return $string;
	}
	
	/**
	 * Include CSS
	 * @param $fileName
	 * @return string
	 */
	function css($fileName) {
		$data = "<link href='".CSS_PATH.$fileName.".css' rel='stylesheet' type='text/css'/>\n";
		return $data;
	}
	
	/**
	 * Display message
	 * @param String $text
	 * @return String
	 */
	function msg($text){
		
		if(!isset($text) || empty($text)) return false;
		$txt = "";
		switch($text){
			//Error
			case 'error':
						$txt = "<div class='j_msg_error'>".ERROR_MSG."</div>";
						break;
			//Success
			case 'success':
						$txt = "<div class='j_msg_success'>".SUCCESS_MSG."</div>";
						break;
			case 'email':
						$txt = "<div class='j_msg_error'>".EMAIL_ERROR_MSG."</div>";
						break;
			default:	
						$txt = "<div class='j_msg_error'>".$text."</div>";
						break;
		}
		return $txt;
	}
}