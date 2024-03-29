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
			<h2 class="title">carousel / view existing</h2>
		    <div class="info" <?php if(!isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg($_GET['q']); ?></div>
			<div class="info" <?php if(isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg('For more actions click on links'); ?></div>
		    <!-- Data -->
		    <?php if(isset($carousel) && !empty($carousel)):?>
		    <div class="entry">
		    <table cellspacing="0" cellspacing="0">
                        <thead>
		    	<tr>
		    		<th>Title</th>
		    		<th>Image (300 x 285 px)</th>
		    		<th>To page</th>
		    		<th>Actions</th>
		    	</tr>
                        </thead>
                        <tbody>
		    	<?php foreach($carousel as $c):?>
		    	<tr onmouseover="className='tr_over'" onmouseout="className='tr_out'" class="tr_out">
		    		<td><?php echo $c['title'];?></td>
		    		<td><img src="<?php echo BASE_PATH.UPLOAD_PATH.'carousel'.DS.$c['id']."-".$c['file']; ?>" width="30%" height="30%" /></td>
		    		<td><?php echo $c['link'];?></td>
		    		<td>
		    			<span>
		    				<a href="<?php echo BASE_PATH.'admin'.DS.'carousel'.DS.$c['id'].DS.'edit'.DS;?>">
		    					<img src="<?php echo IMAGE_PATH;?>edit.gif" width="16" height="16" title="Edit" alt="Edit" />
		    				</a>
		    				<a href="<?php echo BASE_PATH.'admin'.DS.'carousel'.DS.$c['id'].DS.'delete'.DS;?>">
		    					<img src="<?php echo IMAGE_PATH;?>delete.gif" width="16" height="16" title="Delete" alt="Delete" />
		    				</a>
		    				<!-- Up -->
		    				<a href="<?php echo BASE_PATH.'admin'.DS.'carousel'.DS.$c['id'].DS.$c['position'].DS.'up'.DS;?>">
		    					<img src="<?php echo IMAGE_PATH;?>up.png" width="16" height="16" title="Up" alt="Up" />
		    				</a>
		    				<!-- Down -->
		    				<a href="<?php echo BASE_PATH.'admin'.DS.'carousel'.DS.$c['id'].DS.$c['position'].DS.'down'.DS;?>">
		    					<img src="<?php echo IMAGE_PATH;?>down.png" width="16" height="16" title="Down" alt="Down" />
		    				</a>
		    			</span>
		    		</td>
		    	</tr>
		    	<?php endforeach;?>
                        </tbody>
		
		    </table>
		    </div>
		    <?php else:?>
		    No data here
		    <?php endif;?>
		    
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