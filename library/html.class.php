<?php
/**
 * HTML 
 * @author ndusan
 *
 */
class HTML{
	
	protected $_language = array();
	
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
	
/**
	 * Set language array
	 * @param array $lang
	 * @return void
	 */
	public function setLanguage($lang){
		$this->_language = $lang;
	}
	
/**
	 * Get translation
	 * @param String $string
	 * @return String
	 */
	public function translate($string){
		if(array_key_exists($string, $this->_language))
			echo $this->_language[$string];
		else echo $string;
	}
	
	function getWeather() {

		$requests = Model::getAllWeather();
	
		$response = '';
		//Loop requests
		if(isset($requests) && !empty($requests))
		foreach($requests as $r){
			$requestAddress = $r['link'];
			
			$xml_str = file_get_contents($requestAddress, 0);
			// Parses XML
			$xml = new SimplexmlElement($xml_str);
			//print_r($xml);
			// Name
			$response.= "<h1 class='borBot'>".$xml->loc->dnam."</h1>";
			$response.= "<table class='borBot' style='margin:10px 0 10px; text-align:center' cellspacing='0' cellpading='0' width='100%'>
							<tbody>
								<tr>";
			foreach($xml->dayf->day as $item) {
				if($item->hi != 'N/A'){
					$response.= "<td>";
                                        $response .= "<label>Today</label>";
					$min = round((5/9)*($item->hi-32));
					$response .= "<div>max temp: ".$min."&deg</div>";
					$max = round((5/9)*($item->low-32));
					$response .= "<div>min temp: ".$max."&deg</div>";
                                        $response .= "<br/>";
					foreach($item->part as $new) {
						$response.= '<div>';
							//Image
                                                        $response .= "<label>Day / Evening</label>";
							$response.= '<img src="http://s.imwx.com/v.20100415.153311/img/wxicon/45/'.$new->icon.'.png"/><br/>';
							$response .= "<div>".$new->t."</div>";
						$response.= '</div>';
                                                $response .= "<br/>";
					}
					$response .= "</td>";
				}
			}
			$response.= "</tr>
							</tbody>
								</table>";
		}
	  	return $response;	
		
  	}
  	
  	function getCurrency(){

  		//Set agent
		ini_set('user_agent', 'Mozilla Firefox');
		//Set date
		$date = date('d.m.Y');
		//Url
		$part1 = 'http://www.bancaintesabeograd.com/code/navigate.aspx?Id=21';
		$part2 = file_get_contents($part1);
		$address = $part2;

		$output = array();
		
		if (!$part2) return false;
		else{

			// Evropska unija - EUR
			$valuta = '<strong>EUR</strong>';
			$value = strpos($address, $valuta);
			$EUR = '';
			for ($i = $value + 242; $i <= $value + 249; $i++) $EUR .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $EUR,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
								
			// Australija - AUD
			$valuta = '<strong>AUD</strong>';
			$value = strpos($address, $valuta);
			$AUD = '';
			for ($i = $value + 240; $i <= $value + 245; $i++) $AUD .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $AUD,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
			
			// Kanada - CAD
			$valuta = '<strong>CAD</strong>';
			$value = strpos($address, $valuta);
			$CAD = '';
			for ($i = $value + 240; $i <= $value + 245; $i++) $CAD .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $CAD,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
								
			// Danska - DKK
			$valuta = '<strong>DKK</strong>';
			$value = strpos($address, $valuta);
			$DKK = '';
			for ($i = $value + 240; $i <= $value + 245; $i++) $DKK .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $DKK,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
			
			// Japan - JPY
			$valuta = '<strong>JPY</strong>';
			$value = strpos($address, $valuta);
			$JPY = '';
			for ($i = $value + 242; $i <= $value + 247; $i++) $JPY .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $JPY,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
			
			// Norveška - NOK
			$valuta = '<strong>NOK</strong>';
			$value = strpos($address, $valuta);
			$NOK = '';
			for ($i = $value + 240; $i <= $value + 245; $i++)  $NOK .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $NOK,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
			
			// Švedska - SEK
			$valuta = '<strong>SEK</strong>';
			$value = strpos($address, $valuta);
			$SEK = '';
			for ($i = $value + 240; $i <= $value + 245; $i++) $SEK .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $SEK,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
			
			// Švajcarska - CHF
			$valuta = '<strong>CHF</strong>';
			$value = strpos($address, $valuta);
			$CHF = '';
			for ($i = $value + 240; $i <= $value + 245; $i++) $CHF .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $CHF,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
			
			// Velika Britanija - GBP
			$valuta = '<strong>GBP</strong>';
			$value = strpos($address, $valuta);
			$GBP = '';
			for ($i = $value + 242; $i <= $value + 247; $i++) $GBP .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $GBP,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
			
			// SAD - USD
			$valuta = '<strong>USD</strong>';
			$value = strpos($address, $valuta);
			$USD = '';
			for ($i = $value + 240; $i <= $value + 245; $i++) $USD .= $address{$i};
			$tmp = str_replace("</strong>", "", str_replace("<strong>", "", $valuta));
			$output[$tmp] = array(
								'value' => $USD,
								'img' 	=> "<img src='http://www.bancaintesabeograd.com/upload/images/exchange_rates/".$tmp.".gif' style='border: 0px solid ; width: 16px; height: 11px;'/>"
								);
			
			return $output; 
		}
	}
	
}