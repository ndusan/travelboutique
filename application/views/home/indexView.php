<div class="wrapper">
    <div class="header">
        <div class="lang">
            <a class="active" href="#">sr</a> | <a href="#">en</a>
        </div>
        <div class="logo">
            <div class="logoHolder">
                <a href="#"><img alt="travel boutique" title="homepage" src="<?php echo IMAGE_PATH; ?>logo.png" /></a>
            </div>
            <div class="mainNav">
                <a href="#">početna</a>|
                <a href="#">individualna putovanja</a>|
                <a class="active" href="#">aranžmani</a>|
                <a href="#">avio karte</a>|
                <a href="#">rent a car</a>|
                <a href="#">o nama</a>|
                <a href="#">kontakt</a>
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
                        <div class="title"><a href="#">Paris</a></div>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                    <li class="image">
                        <div class="maskTop"></div>
                        <div class="title"><a href="#">Spain</a></div>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                    <li class="image">
                        <div class="maskTop"></div>
                        <div class="title"><a href="#">Maldives</a></div>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                    <li class="image">
                        <div class="maskTop"></div>
                        <div class="title"><a href="#">Maldives</a></div>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                    <li class="image">
                        <div class="maskTop"></div>
                        <div class="title"><a href="#">Maldives</a></div>
                        <img title="asdas" alt="asdsadasd" src="<?php echo IMAGE_PATH; ?>1.jpg" />
                    </li>
                </ul>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <script type="text/javascript" charset="utf-8">
        $(function(){
            $(".carousel .jCarouselLite").jCarouselLite({
                btnNext: 	".carousel .right",
                btnPrev:	".carousel .left",
                auto: 		5000,
                speed:	 	500
            });
        });
    </script>
    <div class="bottom">footer</div>
</div>