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
                        <label><?php echo $extra['insurance']['title'];?></label>
                        <?php echo $extra['insurance']['content'];?>
                    </div>
                </div>
                <div id="ul-voucher" style="display: none;">
                    <div class="boxBig">
                        <label><?php echo $extra['voucher']['title'];?></label>
                        <?php echo $extra['voucher']['content'];?>
                    </div>
                </div>
                <div id="ul-weather" style="display: none;">
                    <div class="boxBig">
                    	<?php echo $html->getWeather();?>
                    </div>
                </div>
                <div id="ul-exchange" style="display: none;">
                    <div class="box">
                    <?php 
                    if($var = $html->getCurrency()):
                    foreach($var as $key => $val):?>
                    
                    <?php echo $key;?>
                    <?php echo $val;?><br/>
                    
                    <?php endforeach;
                    endif;
                    ?>
                    </div>
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
    