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
                <h2><?php echo $html->translate('011 / 32 88 097');?></h2>
                <!-- h2><?//php echo $html->translate('060 / 44 09 040');?></h2 -->
            </div>
        </div>
        <?php include_once(VIEW_PATH.'home'.DS.'_footer.php');?>
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