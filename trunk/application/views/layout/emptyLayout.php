<?php
//This is for Ajax calls
if($renderHTML == 1){
	if(file_exists(VIEW_PATH.$this->_controller.DS.$this->_action.'View.php')) 
		include (VIEW_PATH.$this->_controller.DS.$this->_action.'View.php');
}elseif(isset($result)) echo $result;