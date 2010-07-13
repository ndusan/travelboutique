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
			    <form  enctype="multipart/form-data" action="<?php echo BASE_PATH.'admin'.DS.'pages'.DS.$page['id'].DS.'more'.DS.'submit'.DS.(isset($params['item_id'])?$params['item_id'].DS :""); ?>" method="post">
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
					    		<td><input type="text" name="title[<?php echo $lang['id'];?>]" value="<?php echo @$item[$lang['id']]['title']; ?>" /></td>
					    	</tr>
							<tr>
					    		<th style="vertical-align: top;">Content</th>
					    		<td>
									<textarea cols="46" rows="10" name="content[<?php echo $lang['id'];?>]"><?php echo @$item[$lang['id']]['content']; ?></textarea>
								</td>
					    	</tr>
					    	<?php endforeach;?>
					    	<?php if($page['template']!='tmp1'):?>
					    	<tr>
					    		<th style="vertical-align: top;">Images:<br/>(215 x 105 px)</th>
					    		<td>
					    			<input type="file" name="file0" ><br/>
					    			<input type="file" name="file1" ><br/>
					    			<input type="file" name="file2" ><br/>
					    			<?php 
			    					if(isset($item) && is_dir(UPLOAD_PATH.$item[$lang['id']]['folder'])){
				    					$handle = opendir(UPLOAD_PATH.$item[$lang['id']]['folder']);
				    					while (false !== ($file = readdir($handle))) {
									        if($file!='.' && $file!='..'){?>
									        
									        <a href="<?php echo UPLOAD_PATH.$item[$lang['id']]['folder'].DS.$file; ?>" target="_blank"><?php echo $file;?></a><br/>
									        
									        <?php 
									        }
									    }
			    					}
				    			?>
					    		</td>
					    	</tr>
					    	<?php endif;?>
					    </tbody>
					    <?php if($page['template']!='tmp1' || !isset($morePages) || empty($morePages) || isset($item)):?>
					    <tfoot>
					    	<tr>
					    		<td colspan="2">
					    			<button name="" value="" type="submit">Save</button>
					    		</td>
					    	</tr>
				    	</tfoot>
				    	<?php endif;?>
				    </table>
				    <?php endif;?>
			    </form>
			    <br/>
			    <?php if(isset($morePages) && !empty($morePages)):?>
			    <table cellpadding="0" cellspacing="0">
			    	<tbody>
			    		<tr>
			    			<th>Created</th>
			    			<th>Images</th>
			    			<th style="width:80px;">Action</th>
			    		</tr>
			    		<?php foreach($morePages as $morePage):?>
			    		<tr>
			    			<td>label-<?php echo $morePage['folder'];?></td>
			    			<td>
			    				<?php 
			    					if(is_dir(UPLOAD_PATH.$morePage['folder'])){
				    					$handle = opendir(UPLOAD_PATH.$morePage['folder']);
				    					while (false !== ($file = readdir($handle))) {
									        if($file!='.' && $file!='..'){?>
									        
									        <a href="<?php echo UPLOAD_PATH.$morePage['folder'].DS.$file; ?>" target="_blank"><?php echo $file;?></a><br/>
									        
									        <?php 
									        }
									    }
			    					}
				    			?>
			    			</td>
			    			<td>
			    				<span>
				    				<a href="<?php echo BASE_PATH.'admin'.DS.'pages'.DS.$page['id'].DS.'more'.DS.$morePage['id'].DS.'edit'.DS;?>">
				    					<img src="<?php echo IMAGE_PATH;?>edit.gif" width="16" height="16" title="Edit" alt="Edit" />
				    				</a>
				    				<a href="<?php echo BASE_PATH.'admin'.DS.'pages'.DS.$page['id'].DS.'more'.DS.$morePage['id'].DS.'delete'.DS;?>">
				    					<img src="<?php echo IMAGE_PATH;?>delete.gif" width="16" height="16" title="Delete" alt="Delete" />
				    				</a>
				    				<!-- Up -->
				    				<a href="<?php echo BASE_PATH.'admin'.DS.'pages'.DS.$page['id'].DS.'more'.DS.$morePage['id'].DS.'up'.DS.$morePage['position'].DS;?>">
				    					<img src="<?php echo IMAGE_PATH;?>up.png" width="16" height="16" title="Up" alt="Up" />
				    				</a>
				    				<!-- Down -->
				    				<a href="<?php echo BASE_PATH.'admin'.DS.'pages'.DS.$page['id'].DS.'more'.DS.$morePage['id'].DS.'down'.DS.$morePage['position'].DS;?>">
				    					<img src="<?php echo IMAGE_PATH;?>down.png" width="16" height="16" title="Down" alt="Down" />
				    				</a>
				    			</span>
			    			</td>
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