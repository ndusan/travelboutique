<?php
/**
 * Default controller
 * @author ndusan
 *
 */
class Controller{

	protected $_template;
	protected $db;
	
	public $renderHTML = 0;
	
	/**
	 * Constructor
	 * @param String $controller
	 * @param String $action
	 * @param String $layout
	 * @return void
	 */
	function __construct($controller, $action, $layout){
		
		//Model file
		$modelFile = strtolower($controller)."Model.class.php";
		$modelName = ucfirst($controller)."Model";
		
		//Create model object
		if(file_exists('library'.DS.'model.class.php')) require_once 'library'.DS.'model.class.php';
		
		if(file_exists(MODEL_PATH.$modelFile)) require_once MODEL_PATH.$modelFile;
		$this->db = new $modelName;
		
		//Create template object
		if(file_exists('library'.DS.'template.class.php')) require_once 'library'.DS.'template.class.php';
		$this->_template = new Template($controller, $action, $layout);
	}
	
	/**
	 * Set variables
	 * @param String $name
	 * @param Array $value
	 * @return void
	 */
	function set($name, $value) {
		$this->_template->set($name, $value);
	}
	
	/**
	 * Default array of css files
	 * @param $array
	 * @return void
	 */
	function defaultCss($array){
		$this->_template->defaultCss($array);
	}
	
	/**
	 * Default array of js files
	 * @param $array
	 * @return void
	 */
	function defaultJs($array){
		$this->_template->defaultJs($array);
	}
	
	/**
	 * Redirect
	 * @param String $url
	 * @return void
	 */
	function redirect($url, $msg){
		
		switch($msg){
			case 'error': 	$url = "Location: ".BASE_PATH.(empty($url) ? '' : $url.DS).'?q=error';
							break;
			case 'success':	$url = "Location: ".BASE_PATH.(empty($url) ? '' : $url.DS).'?q=success';
							break;
			case 'email':	$url = "Location: ".BASE_PATH.(empty($url) ? '' : $url.DS).'?q=email';
							break;
			default:		$url = "Location: ".BASE_PATH.(empty($url) ? '' : $url.DS);
		}
		header($url);
		exit;
	}
	
	/**
	 * Desctructor
	 * @return void
	 */
	function __destruct(){
		$this->_template->render($this->renderHTML);
	}
	
	/**
	 * Set to render HTML in Ajax call
	 * @return void
	 */
	function renderHTML(){
		$this->renderHTML = 1;
	}
	
	function sendEmail($data, $action){
		
		$from = "MIME-Version: 1.0\r\n";
        $from .= "Content-type: text/html; charset=utf-8\r\n";
        $from .= "From:Webshop - demo application<noreplay@novakovicdusan.com>\r\n";
        
        switch($action){
        	case 'new':
        				$subject = "Welcome to demo application - Webshop";		
						$par = "<br/>Your credentials are:<br/><br/>- Email: ".$data['email']."<br/>- Password: ".$data['password']."<br/><br/>If you want to access to webshop page click here: <a href='http://webshop.novakovicdusan.com'>http://webshop.novakovicdusan.com</a><br/><br/>";
        				break;
        	case 'forgot':
        				$subject = "Forgot password generator";		
						$par = "<br/>On your request we are sending to you new password:<br/><br/>- Email: ".$data['email']."<br/>- Password: ".$data['password']."<br/><br/>If you want to access to webshop page click here: <a href='http://webshop.novakovicdusan.com'>http://webshop.novakovicdusan.com</a><br/><br/>";
        				break;
        	default:	break;
        }
        
        $head = "Dear <b>".$data['firstname']." ".$data['lastname']."</b>,";
        
        $sign = "Thank you using our service,<br/><b>Webshop generator</b>";
        $mis = "<br/>If you received this message by mistake, please delete it.";
				        
		//Skelet
        $msg_body="<html>
					<head>
					<title>Webshop demo application</title>
					</head>
					<body>
					<table cellspacing='3' cellpadding='1' border='0' align='center' width='750' style='border: 1px solid #E5EBF2;'>
                    <tbody>
                       <tr>
                        <td style='background: #E5EBF2 none repeat scroll 0% 0%;'>
                        <a target='_blank' href='http://webshop.novakovicdusan.com' style=' background: #E5EBF2 none repeat scroll 0% 0%; color: rgb(0, 173, 239); font-family: Tahoma,Arial; font-size: 11px;'>http://webshop.novakovicdusan.com</a>
                        </td>
                       </tr>
                       <tr>
                        <td>
                       <table cellspacing='1' cellpadding='0' border='0' width='100%'>
                        <tbody>
                        <tr>
                        <td width='70%' valign='top' style='padding: 5px; background: rgb(244, 244, 244) none repeat scroll 0% 0%;'>
                        <div style='padding: 5px; background: rgb(0, 173, 239) none repeat scroll 0% 0%; color: rgb(255, 255, 255); font-weight: bold; font-family: Tahoma,Arial; font-size: 11px;'>
                        ".$subject."
                        </div><br/>
                        <div style='border: 1px solid rgb(204, 204, 204); padding: 2px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; font-size: 11px; margin-bottom: 10px; margin-top: 23px; font-family: Tahoma,Arial;'> 
                        <div style='padding: 2px; background: rgb(204, 204, 204) none repeat scroll 0% 0%; color: rgb(102, 102, 102); font-weight: normal; font-family: Tahoma,Arial; font-size: 11px;'>
                        ".$head."
                        </div>".$par."
                        </div>
                        </td>
                       </tr>
                     </tbody>
                     </table>
                    </td>
                    </tr>
                    <tr>
                <td valign='top' style='padding: 10px; background: #E5EBF2 none repeat scroll 0% 0%; color: rgb(0, 173, 239); font-family: Tahoma,Arial; font-size: 11px;'>
               ".$sign."
                    <br/>
                <table cellspacing='0' cellpadding='0' border='0' width='100%'>
                      <tbody><tr>
                        <td style='background: #E5EBF2 none repeat scroll 0% 0%; color: rgb(0, 173, 239); font-weight: normal; font-family: Tahoma,Arial; font-size: 11px;'>
                        ".$mis."
                        </td>
                      </tr>
                </tbody></table></td>
              </tr>
            </tbody></table></body></html>";
		
        //Send email
        mail($data['email'], $subject, $msg_body, $from);
	}
	
	/**
	 * Check session
	 * @return void
	 */
	function userInfoAndSession(){
		if(!isset($_SESSION['ws-user'])) $this->redirect('', '');
		//Check for user info
		return $this->db->getUserInfo($_SESSION['ws-user']);
	}
	
}