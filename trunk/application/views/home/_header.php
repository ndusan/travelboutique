<div class="header">
        <div class="lang">
            <a class="active" href="#">sr</a> | <a href="#">en</a>
        </div>
        <div class="topNav">
            <a href="<?php echo BASE_PATH.'about-us'.DS; ?>"><?php echo $html->translate('o nama');?></a> | <a href="<?php echo BASE_PATH.'contact'.DS; ?>"><?php echo $html->translate('kontakt'); ?></a>
        </div>
        <div class="logo">
            <div class="logoHolder">
                <a href="#"><img alt="travel boutique" title="homepage" src="<?php echo IMAGE_PATH; ?>logo.png" /></a>
            </div>
            <div class="mainNav">
                <a href="<?php echo BASE_PATH;?>" <?php echo (@$active == 'home' ? "class='active'" : ""); ?>><?php  $html->translate('početna'); ?></a> |
                <?php if(isset($dynamicPages) && !empty($dynamicPages)):?>
                <?php foreach($dynamicPages as $dp):?>
                <a href="<?php echo BASE_PATH.$dp['link'].DS;?>" <?php echo (@$active == $dp['link'] ? "class='active'" : ""); ?> ><?php echo $dp['name'];?></a> |
                <?php endforeach; ?>
                <?php endif;?>
                <a href="<?php echo BASE_PATH.'avio-karte'.DS;?>" <?php echo (@$active == 'avio-karte' ? "class='active'" : ""); ?>><?php echo $html->translate('avio karte');?></a> |
                <a href="<?php echo BASE_PATH.'rent-a-car'.DS;?>" <?php echo (@$active == 'rent-a-car' ? "class='active'" : ""); ?>><?php echo $html->translate('rent a car');?></a>
            </div>
        </div>

    </div>