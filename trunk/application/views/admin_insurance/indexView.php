
<!-- start header -->
<div id="header">
    <div id="logo">
        <h1>ADMIN PANEL</h1>
        <h2>www.travelbutique.rs</h2>
    </div>
</div>
<!-- end header -->

<!-- start page -->
<div id="page">
    <!-- start content -->
    <div id="content">

        <div class="post">
            <h2 class="title">insurance</h2>
            <div class="info" <?php if(!isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg($_GET['q']); ?></div>
            <div class="info" <?php if(isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg('For more actions click on links'); ?></div>
            <!-- Data -->
			<div class="entry">
				<form name="form-vaucher" action="<?php echo BASE_PATH.'admin'.DS.'insurance'.DS.'submit'.DS.'?type=insurance';?>" method="post">
			    <table cellpadding="0" cellspacing="0">
			        <thead>
			            <tr>
			                <th colspan="4">Set insurance</th>
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
			                <td colspan="4">
			                    <button type="submit">Submit</button>
			                </td>
			            </tr>
			        </tfoot>
			        <tbody>
			            <?php if(isset($lang) && !empty($lang)):?>
			            <?php foreach($lang as $l):?>
			            <tr>
			            	<td colspan="3">
			            		<img src="<?php echo IMAGE_PATH.$l['name'];?>.png" />
			            	</td>
			            </tr>
			            <tr>
			                <td class="td_title">Title: </td>
			                <td><input type="text" name="title[<?php echo $l['id'];?>]"  value="<?php echo @$response[$l['id']]['title'];?>"/></td>
			            </tr>
			            <tr>
			                <td class="td_title">Content: </td>
			                <td colspan="2">
			                	<textarea name="content[<?php echo $l['id'];?>]" cols="46" rows="10"><?php echo @$response[$l['id']]['content'];?></textarea>
			                </td>
			            </tr>
			            <?php endforeach;?>
			            <?php endif;?>
			        </tbody>
			    </table>
				</form>
			</div>
		</div>
    </div>
    <!-- end content -->

    <!-- start sidebar -->
    <div id="sidebar">
	    <ul>
	      <li>
	        <h2><b>voucher</b></h2>
	        <br/>
	     	<!-- <div class="info">Kliknite na naziv kategorije da biste uneli nove stavke.</div> -->
	        <?php include_once(VIEW_PATH.'admin/_menu.php'); ?>
		    </li>
		</ul>
	</div>
    <!-- end sidebar -->

    <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced"
	});

</script>
<!-- start footer -->
<div id="footer">
    <p id="legal">(c) 2010 TravelButique.rs</p>
</div>
<!-- end footer -->