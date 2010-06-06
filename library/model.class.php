<?php
/**
 * Model
 * @author ndusan
 *
 */
class Model{
	
	protected $_dbHandle;
	
	/**
	 * Contructor
	 * @return boolean
	 */
	function __construct(){
		$this->_dbHandle = @mysql_connect(DB_HOST, DB_USER, DB_PASS);
        if ($this->_dbHandle != 0) {
            if (mysql_select_db(DB_NAME, $this->_dbHandle)){
            	@mysql_query("SET NAMES 'utf8'", $this->_dbHandle);
				@mysql_query("SET CHARACTER_SET_CLIENT=utf8", $this->_dbHandle);
				@mysql_query("SET CHARACTER_SET_RESULTS=utf8", $this->_dbHandle);
				@mysql_query("SET CHARACTER_SET_CONNECTION=utf8", $this->_dbHandle);
				return true;   
            } 
            else return false;
        } else return false;
	}

	/**
	 * Get error string
	 * @return string
	 */
	function getError() {
        return mysql_error($this->_dbHandle);
    }
    
    /**
     * Password generator
     * @param int $len
     * @return string
     */
    function passwordGenerator($len = 6){
	    $r = '';
	    for($i=0; $i<$len; $i++)
	        $r .= chr(rand(0, 25) + ord('a'));
	    return $r;
    }
    
    /**
     * Get user info
     * @param array $params
     * @return array
     */
    function getUserInfo($params){
    	$query = sprintf("SELECT * FROM `users` WHERE `id`='%s'",
    					$params['id']
    					);
    	$res = mysql_query($query);
    	return mysql_fetch_assoc($res);
    }
    
	/**
	* turns mysql resource into array
	* @param resource $result
	* @return array
	*/
	function result_to_array($result){
		$result_array = array();
	    for ($i=0; $row = @mysql_fetch_array($result); $i++){
	    	$result_array[$i] = $row; 
	    }
	    return $result_array;
	}
}