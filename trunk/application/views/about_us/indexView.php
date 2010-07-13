<div class="wrapper">
    <?php include_once(VIEW_PATH.'home'.DS.'_header.php'); ?>
    <div class="top"></div>
    <div class="main">
        <div style="clear: both;"></div>
        <div class="content">
            <div class="mainPromo">
               <h1 class="borBot"><?php echo $getPageInfo['items'][0]['title'];?></h1>
                <?php echo $getPageInfo['items'][0]['content'];?>
            </div>
            <div class="sidebar">
                <?php include_once(VIEW_PATH.'home'.DS.'_sidebar.php');?>
            </div>
        </div>
	<?php include_once(VIEW_PATH.'home'.DS.'_footer.php');?>
    </div>
    <div class="bottom"></div>
</div>

