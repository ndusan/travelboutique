<?php
//Load different template
$view = "";

switch($template){
	case 'tmp1': default:
				$view = "tmp1View.php";		
				break;
	case 'tmp2':
				$view = "tmp2View.php";
				break;
}
@include_once($view);
