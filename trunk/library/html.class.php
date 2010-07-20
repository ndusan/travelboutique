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
		$part1 = 'http://www.nbs.rs/internet/latinica/scripts/kl.html?datum=';
		$part1 .= $date.'&broj=br.&godina='.date('Y').'&vrsta=3&eksport=plain';
		$part2 = file_get_contents($part1);
		$address = $part2;

		$output = array();
		
		if (!$part2) return false;
		else{

			// Evropska unija - EUR
			$valuta = 'EUR';
			$value = strpos($address, $valuta);
			$EUR = '';
			for ($i = $value + 87; $i <= $value + 93; $i++) $EUR .= $address{$i};
			$output[$valuta] = $EUR;
			
			// Australija - AUD
			$valuta = 'AUD';
			$value = strpos($address, $valuta);
			$AUD = '';
			for ($i = $value + 87; $i <= $value + 93; $i++) $AUD .= $address{$i};
			$output[$valuta] = $AUD;
			
			// Kanada - CAD
			$valuta = 'CAD';
			$value = strpos($address, $valuta);
			$CAD = '';
			for ($i = $value + 87; $i <= $value + 93; $i++) $CAD .= $address{$i};
			$output[$valuta] = $CAD;
			
			// Hrvatska - HRK
			$valuta = 'HRK';
			$value = strpos($address, $valuta);
			$HRK = '';
			for ($i = $value + 87; $i <= $value + 93; $i++) $HRK .= $address{$i};
			$output[$valuta] = $HRK;
			
			// Danska - DKK
			$valuta = 'DKK';
			$value = strpos($address, $valuta);
			$DKK = '';
			for ($i = $value + 87; $i <= $value + 93; $i++) $DKK .= $address{$i};
			$output[$valuta] = $DKK;
			
			// Japan - JPY
			$valuta = 'JPY';
			$value = strpos($address, $valuta);
			$JPY = '';
			for ($i = $value + 89; $i <= $value + 95; $i++) $JPY .= $address{$i};
			$output[$valuta] = $JPY;
			
			// Norveška - NOK
			$valuta = 'NOK';
			$value = strpos($address, $valuta);
			$NOK = '';
			for ($i = $value + 87; $i <= $value + 92; $i++)  $NOK .= $address{$i};
			$output[$valuta] = $NOK;
			
			// Švedska - SEK
			$valuta = 'SEK';
			$value = strpos($address, $valuta);
			$SEK = '';
			for ($i = $value + 87; $i <= $value + 92; $i++) $SEK .= $address{$i};
			$output[$valuta] = $SEK;
			
			// Švajcarska - CHF
			$valuta = 'CHF';
			$value = strpos($address, $valuta);
			$CHF = '';
			for ($i = $value + 87; $i <= $value + 93; $i++) $CHF .= $address{$i};
			$output[$valuta] = $CHF;
			
			// Velika Britanija - GBP
			$valuta = 'GBP';
			$value = strpos($address, $valuta);
			$GBP = '';
			for ($i = $value + 87; $i <= $value + 93; $i++) $GBP .= $address{$i};
			$output[$valuta] = $GBP;
			
			// SAD - USD
			$valuta = 'USD';
			$value = strpos($address, $valuta);
			$USD = '';
			for ($i = $value + 87; $i <= $value + 93; $i++) $USD .= $address{$i};
			$output[$valuta] = $USD;
			
			// Bosna i Hercegovina - BAM
			$valuta = 'BAM';
			$value = strpos($address, $valuta);
			$BAM = '';
			for ($i = $value + 87; $i <= $value + 93; $i++) $BAM .= $address{$i};
			$output[$valuta] = $BAM;
			
			return $output; 
		}
	}
	
}