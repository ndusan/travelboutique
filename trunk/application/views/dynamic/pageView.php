<?php
//Load different template
$view = "";

switch($getPageInfo['template']){
	case 'tmp1': default:
				$view = "tmp1View.php";		
				break;
	case 'tmp2':
				$view = "tmp2View.php";
				break;
}
?>

<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php'); ?>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">
          <?php @include_once($view); ?>
            <div class="sidebar">
                <div class="subNav">
                    <?php if(isset($getPageInfo['children']) && !empty($getPageInfo['children'])):?>
                    <h4><?php echo $html->translate('Podmeni');?></h4>
                    <ul>
                    	<?php foreach($getPageInfo['children'] as $ch):?>
                        <li><h3><a href="<?php echo BASE_PATH.$getPageInfo['link'].DS.$ch['link'].DS; ?>"><?php echo $ch['name']?></a></h3></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php else:?>
                    <?php if(isset($getPageInfo['brothers']) && !empty($getPageInfo['brothers'])):?>
                    <h4><?php echo $html->translate('Podmeni');?></h4>
                    <ul>
                    	<?php foreach($getPageInfo['brothers'] as $ch):?>
                        <li><h3><a href="<?php echo BASE_PATH.$ch['parent']['link'].DS.$ch['link'].DS; ?>"><?php echo $ch['name']?></a></h3></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif;?>
                    <?php endif;?>
                </div>
                <?php include_once(VIEW_PATH.'home'.DS.'_sidebar.php');?>
            </div>
        </div>
		<?php if(isset($getPageInfo['banners']) && !empty($getPageInfo['banners'])):?>
        <div class="boxHolder">
            <div class="tabs">
                <ul>
                    <li><a href="#" class="active">Bla bla bla</a></li>
                </ul>
            </div>
            <ul>
				<?php foreach($getPageInfo['banners'] as $banner):?>
                <li class="box">
                    <a href="<?php echo BASE_PATH.(isset($banner['parent_link']) ? $banner['parent_link'].DS : "").(isset($banner['link']) ? $banner['link'].DS : "");?>"><img title="<?php echo $banner['title']; ?>" alt="<?php echo $banner['title']; ?>" src="<?php echo BASE_PATH.UPLOAD_PATH.'banners'.DS.$banner['id']."-".$banner['file']; ?>" /></a>
                    <h2><a href="<?php echo BASE_PATH.(isset($banner['parent_link']) ? $banner['parent_link'].DS : "").(isset($banner['link']) ? $banner['link'].DS : "");?>"><?php echo $banner['title']; ?></a></h2>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="clear"></div>
        </div>
        <?php endif;?>
        
        <?php if(isset($getPageInfo['partners']) && !empty($getPageInfo['partners'])):?>
        <div class="partners">
        	<?php foreach($getPageInfo['partners'] as $par):?>
            <a href="<?php echo $par['link']; ?>" target="_blank"><img alt="travel boutique" title="<?php echo $par['file'];?>" src="<?php echo BASE_PATH.UPLOAD_PATH.'partners'.DS.$par['id']."-".$par['file']; ?>" /></a>
			<?php endforeach;?>
        </div>
        <?php endif;?>
    </div>
    <div class="bottom"></div>
</div>




