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
?>

Ovde mozes da dodas svoj html koji bi bio zajednicki za ove template-ove

<?php @include_once($view); ?>
