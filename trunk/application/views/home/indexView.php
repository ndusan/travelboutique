<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php');?>
    <div class="top"></div>
    <div class="main">
        <!-- I've added class carousel -->
        <div class="carousel banners">
            <a href="javascript:;" class="arrow right"></a>
            <a href="javascript:;" class="arrow left"></a>
            <div class="maskBottom"></div>
            <!-- I've added div with class jCarouselLite  -->
            <div class="jCarouselLite">
                <?php if(isset($getPageInfo['carousel']) && !empty($getPageInfo['carousel'])):?>
                <ul>
                        <?php foreach($getPageInfo['carousel'] as $c):?>
                    <li class="image">
                        <div class="maskTop"></div>
                        <a class="title" href="<?php echo $c['parent_link'].DS.(isset($c['link']) ? $c['link'].DS : "");?>"><span><?php echo $html->translate('detaljnije');?></span><?php echo $c['title'];?></a>
                        <img title="<?php echo $c['title'];?>" alt="<?php echo $c['title'];?>" src="<?php echo BASE_PATH.UPLOAD_PATH.'carousel'.DS.$c['id']."-".$c['file']; ?>" />
                    </li>
                        <?php endforeach;?>
                </ul>
                <?php endif;?>
            </div>
        </div>
        <div style="clear: both;"></div>
        <div class="content">
            <div class="about">
                <?php if(isset($getPageInfo['items']) && !empty($getPageInfo['items'])):?>
                    <?php foreach($getPageInfo['items'] as $gpi):?>
                <h1 class="borBot"><?php echo $gpi['title'];?></h1>

                <p><?php echo $gpi['content'];?></p>
                    <?php endforeach;?>
                <?php endif; ?>
            </div>
            <div class="callUs">
                <div class="wings"></div>
                <div class="phone"></div>
                <h1 class="borBot"><?php echo $html->translate('Pozovite nas');?></h1>
                <h2><?php echo $html->translate('011 / 435 67 89');?></h2>
                <h2><?php echo $html->translate('063 / 321 59 87');?></h2>
            </div>
        </div>
        <div class="boxHolder">
            <div class="tabs">
                <ul>
                    <li><a href="javascript:;" class="active" id="link-offer"><?php echo $html->translate('u ponudi');?></a></li>
                    <li><a href="javascript:;" id="link-insurance"><?php echo $html->translate('putno osiguranje');?></a></li>
                    <li><a href="javascript:;" id="link-voucher"><?php echo $html->translate('poklon vaučeri');?></a></li>
                    <li><a href="javascript:;" id="link-weather"><?php echo $html->translate('vremenska prognoza');?></a></li>
                    <li><a href="javascript:;" id="link-exchange"><?php echo $html->translate('kursna lista');?></a></li>
                </ul>
            </div>
            <div id="ul">
                <ul id="ul-offer">
                    <?php foreach($getPageInfo['banners'] as $banner):?>
                    <li class="box">
                        <a href="<?php echo BASE_PATH.$banner['parent_link'].DS.(isset($banner['link']) ? $banner['link'].DS : "");?>"><img title="<?php echo $banner['title']; ?>" alt="<?php echo $banner['title']; ?>" src="<?php echo BASE_PATH.UPLOAD_PATH.'banners'.DS.$banner['id']."-".$banner['file']; ?>" /></a>
                        <h2><a href="<?php echo BASE_PATH.$banner['parent_link'].DS.(isset($banner['link']) ? $banner['link'].DS : "");?>"><?php echo $banner['title']; ?></a></h2>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <div id="ul-insurance" style="display: none;">
                    <div class="boxBig">
                        <?php echo $extra['insurance']['title'];?>
                        <?php echo $extra['insurance']['content'];?>
                    </div>
                </div>
                <div id="ul-voucher" style="display: none;">
                    <div class="boxBig">
                        <?php echo $extra['voucher']['title'];?>
                        <?php echo $extra['voucher']['content'];?>
                    </div>
                </div>
                <div id="ul-weather" style="display: none;">
                    <div class="boxBig"></div>
                </div>
                <div id="ul-exchange" style="display: none;">
                    <div class="box"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="links">
            <div class="newsletter">
                <div class="letter"></div>
                <h1 class="borBot"><?php echo $html->translate('Dnevne novosti');?></h1>
                <p><?php echo $html->translate('Novosti tekst');?></p>
                <form action="<?php echo BASE_PATH.'ajax-news'.DS;?>" method="post">
                    <label><?php echo $html->translate('Vaša el.adresa');?></label>
                    <input class="inputSmall" type="text" name="email" value="" />
                    <button type="button" id="newsletters"><?php echo $html->translate('Potvrdi');?></button>
                </form>
            </div>
            <div class="details">
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <td><a href="#"><img src="<?php echo IMAGE_PATH; ?>facebook.png" alt="" title="" /></a></td>
                        <td><label>Travel Boutique on<br/> <a href="#">Facebook</a></label></td>
                        <td><img src="<?php echo IMAGE_PATH; ?>skype.png" alt="" title="" /></td>
                        <td><label>Skype name:<br/> Travel-Boutique</label></td>
                    </tr>
                </table>
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