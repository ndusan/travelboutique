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
			<h2 class="title">pages / more</h2>
		    <div class="info" <?php if(!isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg($_GET['q']); ?></div>
			<div class="info" <?php if(isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg('More details view'); ?></div>
		    <!-- Data -->
		    <div class="entry">
			    <div>
			    	Template: <?php echo $page['template'];?>
			    </div>
			    <br/><br/>
			    <form action="<?php echo BASE_PATH.'admin'.DS.'pages'.DS.$page['id'].DS.'more'.DS.'submit'.DS; ?>" method="post">
				    <?php if(isset($langs) && !empty($langs)):?>
				    <table cellspacing="0" cellspacing="0">
				    	<tbody>
				    		<?php foreach($langs as $lang):?>
					    	<tr>
					    		<th>Language</th>
					    		<td><img src="<?php echo IMAGE_PATH.$lang['name'].'.png'; ?>" alt="" /></td>
					    	</tr>
					    	<tr>
					    		<th>Title</th>
					    		<td><input type="text" name="title[<?php echo $lang['id'];?>]" value="" /></td>
					    	</tr>
							<tr>
					    		<th style="vertical-align: top;">Content</th>
					    		<td>
									<textarea cols="46" rows="10" name="content[<?php echo $lang['id'];?>]"></textarea>
								</td>
					    	</tr>
					    	<?php endforeach;?>
					    	<tr>
					    		<th style="vertical-align: top;">Images:</th>
					    		<td>
					    			<input type="file" name="file1" value=""><br/>
					    			<input type="file" name="file2" value=""><br/>
					    			<input type="file" name="file3" value="">
					    		</td>
					    	</tr>
					    </tbody>
					    <tfoot>
					    	<tr>
					    		<td colspan="2">
					    			<button name="" value="" type="submit">Save</button>
					    		</td>
					    	</tr>
				    	</tfoot>
				    </table>
				    <?php endif;?>
			    </form>
			    <br/>
			    <?php if(isset($morePages) && !empty($morePages)):?>
			    <table cellpadding="0" cellspacing="0">
			    	<tbody>
			    		<tr>
			    			<th>xx</th>
			    		</tr>
			    		<?php foreach($morePages as $morePage):?>
			    		<tr>
			    			<td>xxx</td>
			    		</tr>
			    		<?php endforeach; ?>
			    	</tbody>
			    </table>
			    <?php endif;?>
		    </div>
		</div>

	</div>
	<!-- end content --> 	

  <!-- start sidebar -->
  <div id="sidebar">
    <ul>
      <li>
        <h2><b>main menu</b></h2>
        <!-- <div class="info">Kliknite na naziv kategorije da biste uneli nove stavke.</div> -->
        <br/>
        <?php include_once(VIEW_PATH.'admin/_menu.php'); ?>
      </li>
    </ul>
  </div>
  <!-- end sidebar -->
  
  <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->

<!-- start footer -->
<div id="footer">
  <p id="legal">(c) 2010 TravelButique.rs</p>
</div>
<!-- end footer -->
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced"
	});
</script>