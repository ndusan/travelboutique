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
	
	function getWeather($city_id = 0) {

		//Set cache
		if($response = Cache::get(array('key' => 'weather'.$city_id))){
			
			return $response;
		}else{
			
			$requests = Model::getAllWeather($city_id);
	
			$response = '';
			if(isset($requests['link']) && !empty($requests['link'])){
				$requestAddress = $requests['link'];
				
				$xml_str = file_get_contents("http://xoap.weather.com/weather/local/".$requestAddress."?cc=*&dayf=5&link=xoap&prod=xoap&par=1197447447&key=43e103dae96b02ae", 0);
				// Parses XML
				$xml = new SimplexmlElement($xml_str);
				//print_r($xml);
				// Name
				$response.= "<h1 class='borBot'>".$xml->loc->dnam."</h1>";
				$response.= "<table class='borBot' style='margin:10px 0 10px; text-align:center' cellspacing='0' cellpading='0' width='100%'>
								<tbody>
									<tr>";
				//Set date
				$date = substr($xml->dayf->lsup, 0, 8);
				$date = explode("/", $date);
				$day = 0;
				foreach($xml->dayf->day as $item) {
					if($item->hi != 'N/A'){
						$date_out = @date("d-m-Y", mktime(0, 0, 0, $date[0], $date[1]+$day, "20".$date[2]));
						$day++;
						$response.= "<td>";
		                $response .= "<label>".$date_out."</label>";
						$max = round((5/9)*($item->low-32));
						$response .= "<div>min temp: ".$max."&deg</div>";
						$min = round((5/9)*($item->hi-32));
						$response .= "<div>max temp: ".$min."&deg</div>";
		                $response .= "<br/>";
		                $first = true;
						foreach($item->part as $new) {
							$response.= '<div>';
								//Image
		                        $response .= "<label>".($first ? "Day" : "Evening")."</label>";
								$response.= '<img src="http://s.imwx.com/v.20100415.153311/img/wxicon/45/'.$new->icon.'.png"/><br/>';
								$response .= "<div>".$new->t."</div>";
							$response.= '</div>';
		                    $response .= "<br/>";
		                    $first = false;
						}
						$response .= "</td>";
					}
				}
				$response.= "</tr>
								</tbody>
									</table>";
			}
		  	
			Cache::set(array('key' => 'weather'.$city_id, 'data' => $response));
			return $response;
		}
		
  	}
  	
  	function getCurrency(){
		
  		//Cache data to make things much faster
  		if($output = Cache::get(array('key' => 'currency'))){
  			
  			return $output;
  		}else{
  			
  			//Set agent
			ini_set('user_agent', 'Mozilla Firefox');
			//Set date
			$date = date('d.m.Y');
			//Url
			$part1 = 'http://www.unicreditbank.rs/?jez=&p=40';
			$part2 = file_get_contents($part1);
			$address = $part2;
	
			$output = array();
		
			if (!$part2) return false;
			else{
				
				// Evropska unija - EUR
				$valuta = '<td align="right">EUR</td>';
				$value = strpos($address, $valuta);
				
				$EUR = '';
				for ($i = $value + 180; $i <= $value + 186; $i++) $EUR .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $EUR,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
									
				// Australija - AUD
				$valuta = '<td align="right">AUD</td>';
				$value = strpos($address, $valuta);
				$AUD = '';
				for ($i = $value + 178; $i <= $value + 183; $i++) $AUD .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $AUD,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
				
				// Kanada - CAD
				$valuta = '<td align="right">CAD</td>';
				$value = strpos($address, $valuta);
				$CAD = '';
				for ($i = $value + 178; $i <= $value + 183; $i++) $CAD .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $CAD,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
									
				// Danska - DKK
				$valuta = '<td align="right">DKK</td>';
				$value = strpos($address, $valuta);
				$DKK = '';
				for ($i = $value + 178; $i <= $value + 183; $i++) $DKK .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $DKK,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
				
				// Japan - JPY
				$valuta = '<td align="right">JPY</td>';
				$value = strpos($address, $valuta);
				$JPY = '';
				for ($i = $value + 180; $i <= $value + 185; $i++) $JPY .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $JPY,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
				
				// Norveška - NOK
				$valuta = '<td align="right">NOK</td>';
				$value = strpos($address, $valuta);
				$NOK = '';
				for ($i = $value + 178; $i <= $value + 183; $i++)  $NOK .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $NOK,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
				
				// Švedska - SEK
				$valuta = '<td align="right">SEK</td>';
				$value = strpos($address, $valuta);
				$SEK = '';
				for ($i = $value + 178; $i <= $value + 183; $i++) $SEK .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $SEK,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
				
				// Švajcarska - CHF
				$valuta = '<td align="right">CHF</td>';
				$value = strpos($address, $valuta);
				$CHF = '';
				for ($i = $value + 178; $i <= $value + 183; $i++) $CHF .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $CHF,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
				
				// Velika Britanija - GBP
				$valuta = '<td align="right">GBP</td>';
				$value = strpos($address, $valuta);
				$GBP = '';
				for ($i = $value + 180; $i <= $value + 186; $i++) $GBP .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $GBP,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
				
				// SAD - USD
				$valuta = '<td align="right">USD</td>';
				$value = strpos($address, $valuta);
				$USD = '';
				for ($i = $value + 178; $i <= $value + 183; $i++) $USD .= $address{$i};
				$tmp = str_replace('<td align="right">', "", str_replace("</td>", "", $valuta));
				$output[$tmp] = array(
									'value' => $USD,
									'img' 	=> "<img src='http://www.unicreditbank.rs/i/".$tmp.".gif'/>"
									);
	  			
	  			
	  		}
	  		Cache::set(array('key' => 'currency', 'data' => $output));
  			return $output;
  		}
		
	}
	
	public function getWeatherCities(){
		
		return Model::getWeatherCities();
	}
	
}