<?php if(isset($getPageInfo) && !empty($getPageInfo)):?>
<div class="mainPromo">
	<!-- breadcrumb -->
    <div class="breadcrumb">
	    <a href="<?php echo BASE_PATH;?>"><?php echo ucfirst(strtolower($html->translate('Početna')));?></a>
	    <?php if($getPageInfo['parent_id']>0):?>
	    &raquo; <a href="<?php echo BASE_PATH.$getPageInfo['parent_name'];?>"><?php echo ucfirst(strtolower(str_replace("-", " ", $getPageInfo['parent_name'])));?></a>
	    <?php endif;?>
	    &raquo; <?php echo ucfirst(strtolower($getPageInfo['name']));?>
    </div>
    <h1 class="borBot"><?php echo $getPageInfo['name'];?></h1>
    <?php foreach($getPageInfo['items'] as $d):?>
    <div class="onePromoted borBot">
    	<?php 
    	$dh = opendir(UPLOAD_PATH.$d['folder']);
    	$narray = array();
        while (($file = readdir($dh)) !== false):
        	if($file != '.' && $file != '..'):
        	$narray[] = $file;
			endif;
        endwhile;
        sort($narray);
        for($i=0; $i<sizeof($narray); $i++):
        ?>
        <img alt="travel boutique" title="<?php echo $d['title'];?>" src="<?php echo BASE_PATH.UPLOAD_PATH.$d['folder'].DS.$narray[$i]; ?>" />
		<?php endfor;?>
        <h2><?php echo $d['title'];?></h2>
        <p>
            <?php echo $d['content'];?>
        </p>
    </div>
    <?php endforeach;?>
</div>

<?php endif;?>