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
                    <li><a href="javascript:;" class="active">u ponudi</a></li>
                    <li><a href="#">putno osiguranje</a></li>
                    <li><a href="#">poklon vaucer</a></li>
                    <li><a href="#">vremenska prognoza</a></li>
                    <li><a href="#">kursna lista</a></li>
                </ul>
            </div>

            <ul>
                <?php foreach($getPageInfo['banners'] as $banner):?>
                <li class="box">
                    <a href="<?php echo BASE_PATH.$banner['parent_link'].DS.(isset($banner['link']) ? $banner['link'].DS : "");?>"><img title="<?php echo $banner['title']; ?>" alt="<?php echo $banner['title']; ?>" src="<?php echo BASE_PATH.UPLOAD_PATH.'banners'.DS.$banner['id']."-".$banner['file']; ?>" /></a>
                    <h2><a href="<?php echo BASE_PATH.$banner['parent_link'].DS.(isset($banner['link']) ? $banner['link'].DS : "");?>"><?php echo $banner['title']; ?></a></h2>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="links">
            <div class="newsletter">
                <div class="letter"></div>
                <h1 class="borBot"><?php echo $html->translate('Dnevne novosti');?></h1>
                <p><?php echo $html->translate('Novosti tekst');?></p>
                <form>
                    <label><?php echo $html->translate('Vaša el.adresa');?></label>
                    <input class="inputSmall" type="text" name="" value="" />
                    <button type="submit"><?php echo $html->translate('Potvrdi');?></button>
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