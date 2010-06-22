<?php if(isset($getPageInfo) && !empty($getPageInfo)):?>
<div class="mainPromo">
    <h1 class="borBot"><?php echo $getPageInfo['name'];?></h1>
    <?php foreach($getPageInfo['items'] as $d):?>
    <div class="onePromoted borBot">
    	<?php 
    	$dh = opendir(UPLOAD_PATH.$d['folder']);
        while (($file = readdir($dh)) !== false):?>
        <?php if($file != '.' && $file != '..'):?>
        <img alt="travel boutique" title="<?php echo $d['title'];?>" src="<?php echo BASE_PATH.UPLOAD_PATH.$d['folder'].DS.$file; ?>" />
		<?php endif;?>
        <?php endwhile;?>
        <h2><?php echo $d['title'];?></h2>
        <p>
            <?php echo $d['content'];?>
        </p>
    </div>
    <?php endforeach;?>
</div>

<?php endif;?>