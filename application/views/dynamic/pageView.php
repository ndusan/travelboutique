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

<div class="wrapper">
    <div class="header">
        <div class="lang">
            <a class="active" href="#">sr</a> | <a href="#">en</a>
        </div>
        <div class="topNav">
            <a href="#">o nama</a> | <a href="#">kontakt</a>
        </div>
        <div class="logo">
            <div class="logoHolder">
                <a href="#"><img alt="travel boutique" title="homepage" src="<?php echo IMAGE_PATH; ?>logo.png" /></a>
            </div>
            <div class="mainNav">
                <a href="#">početna</a> |
                <a href="#">individualna putovanja</a> |
                <a class="active" href="#">aranžmani</a> |
                <a href="#">avio karte</a> |
                <a href="#">rent a car</a>
            </div>
        </div>
    </div>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">
            
            <div class="sidebar">
                <div class="subNav">
                    <h4>Subnavigation</h4>
                    <ul>
                        <li><h3><a href="#">Sub name</a></h3></li>
                        <li><h3><a href="#">Another link</a></h3></li>
                        <li><h3><a href="#">Subnav </a></h3></li>
                        <li><h3><a href="#">Subnavigation</a></h3></li>
                        <li><h3><a href="#">FAQ</a></h3></li>
                        <li><h3><a href="#">Weather services</a></h3></li>
                    </ul>
                </div>
                <div class="additional">
                    <h4>Aditional info</h4>
                    <p>Je jedinstveno mesto koje Vam pruza mogucnost da sami kreirajte svoje putovanje uz nasu strucnu pomoc.
                        <br/><br/>
                        U skladu sa Vasim zeljama Vas "Butik putovanja" Vam pruza i kompletnu pripremu za samu destinaciju.
                    </p>
                </div>
                <div class="contactUs">
                    <h4>Contact info</h4>
                    <p>Serbia, 11000 Belgrade,<br/>
                        42 Gospodar Jevremova st.<br/><br/>

                        Tel: +381 60 440 90 40<br/>
                        Email: <a href="#">office@travelboutique.rs</a><br/><br/>

                        Web: <a href="#">www.travelboutique.rs</a></p>
                </div>
            </div>
        </div>

        <div class="boxHolder">
            <div class="tabs">
                <ul>
                    <li><a href="#" class="active">Bla bla bla</a></li>
                </ul>
            </div>

            <ul>
                <li class="box">
                    <a href="#"><img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>2.jpg" /></a>
                    <h2><a href="#">Couple at the beach holding hands</a></h2>
                </li>
                <li class="box">
                    <a href="#"><img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>2.jpg" /></a>
                    <h2><a href="#">Couple at the beach holding hands</a></h2>
                </li>
                <li class="box">
                    <a href="#"><img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>2.jpg" /></a>
                    <h2><a href="#">Couple at the beach holding hands</a></h2>
                </li>
                <li class="box">
                    <a href="#"><img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>2.jpg" /></a>
                    <h2><a href="#">Couple at the beach holding hands</a></h2>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="partners">
            <img alt="travel boutique" title="homepage" src="<?php echo IMAGE_PATH; ?>4.jpg" />
            <img alt="travel boutique" title="homepage" src="<?php echo IMAGE_PATH; ?>4.jpg" />
            <img alt="travel boutique" title="homepage" src="<?php echo IMAGE_PATH; ?>4.jpg" />
            <img alt="travel boutique" title="homepage" src="<?php echo IMAGE_PATH; ?>4.jpg" />
            <img alt="travel boutique" title="homepage" src="<?php echo IMAGE_PATH; ?>4.jpg" />
        </div>
    </div>
    <div class="bottom"></div>
</div>

<?php @include_once($view); ?>


