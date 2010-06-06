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
        <!-- I've added class carousel -->
        <div class="carousel banners">
            <a href="javascript:;" class="arrow right"></a>
            <a href="javascript:;" class="arrow left"></a>
            <div class="maskBottom"></div>
            <!-- I've added div with class jCarouselLite  -->
            <div class="jCarouselLite">
                <ul>
                    <li class="image">
                        <div class="maskTop"></div>
                        <a class="title" href="#"><span>read more</span>Paris</a>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                    <li class="image">
                        <div class="maskTop"></div>
                        <a class="title" href="#"><span>read more</span>Paris</a>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                    <li class="image">
                        <div class="maskTop"></div>
                        <a class="title" href="#"><span>read more</span>Sweden</a>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                    <li class="image">
                        <div class="maskTop"></div>
                        <a class="title" href="#"><span>read more</span>Bobica</a>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                    <li class="image">
                        <div class="maskTop"></div>
                        <a class="title" href="#"><span>read more</span>Jagodica</a>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                </ul>
            </div>
        </div>
        <div style="clear: both;"></div>
        <div class="content">
            <div class="about">
                <h1 class="borBot">Sta je Travel boutique?</h1>
                <p>Travel boutique je jedinstveno mesto koje Vam pruza mogucnost da sami kreirajte svoje putovanje uz nasu strucnu pomoc.
                    <br/><br/>
                    U skladu sa Vasim zeljama Vas "Butik putovanja" Vam pruza i kompletnu pripremu za samu destinaciju.</p>
            </div>
            <div class="callUs">
                <div class="wings"></div>
                <div class="phone"></div>
                <h1 class="borBot">Pozovite nas</h1>
                <h2>011 / 435 67 89</h2>
                <h2>063 / 321 59 87</h2>
            </div>
        </div>
        <div class="boxHolder">
            <div class="tabs">
                <ul>
                    <li><a href="#" class="active">u ponudi</a></li>
                    <li><a href="#">putno osiguranje</a></li>
                    <li><a href="#">poklon vaucer</a></li>
                    <li><a href="#">vremenska prognoza</a></li>
                    <li><a href="#">kursna lista</a></li>
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
        <div class="links">
            <div class="newsletter">
                <div class="letter"></div>
                <h1 class="borBot">Newsletter</h1>
                <p>Unesite svoju e-mail adresu da biste bla bla</p>
                <form>
                    <label>Vasa e-mail adresa</label>
                    <input class="inputSmall" type="text" name="" value="" />
                    <button type="submit">Potvrdi</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $(".carousel .jCarouselLite").jCarouselLite({
                btnNext: 	".carousel .right",
                btnPrev:	".carousel .left",
                auto: 		10000,
                speed:	 	500
            });
        });
    </script>
    <div class="bottom"></div>
</div>