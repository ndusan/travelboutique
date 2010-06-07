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
			<h2 class="title">pages / view existing</h2>
		    <div class="warning" <?php if(!isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg($_GET['q']); ?></div>
			<div class="info" <?php if(isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg('For more actions click on links'); ?></div>
			<br/>
		    <!-- Data -->
		    <?php if(isset($pages) && !empty($pages)):?>
		    <div class="entry">
		    <table cellspacing="0" cellspacing="0">
		    	<tr class="steps_title">
		    		<td>Name</td>
		    		<td>Surname</td>
		    		<td>Email</td>
		    		<td>Actions</td>
		    	</tr>
		    	
		    	<?php foreach($pages as $page):?>
		    	<tr onmouseover="className='tr_over'" onmouseout="className='tr_out'" class="tr_out">
		    		<td><?php echo $user['firstname'];?></td>
		    		<td><?php echo $user['lastname'];?></td>
		    		<td><?php echo $user['email'];?></td>
		    		<td>
		    			<span>
		    				<a href="<?php echo BASE_PATH.'admin'.DS.'users'.DS.$user['id'].DS.'edit'.DS;?>">
		    					<img src="<?php echo IMAGE_PATH;?>edit.gif" width="16" height="16" title="Edit" alt="Edit" />
		    				</a>
		    				<?php 
		    					//Can not delete it self
		    					if($_SESSION['tb']['id'] != $user['id']):
		    				?>
		    				<a href="javascript:void(0);" onclick="javascript: confirmDelete('Delete <?php echo $user['firstname'].' '.$user['lastname'];?>?', '<?php echo BASE_PATH.'admin'.DS.'users'.DS.$user['id'].DS.'delete'.DS;?>');">
		    					<img src="<?php echo IMAGE_PATH;?>delete.gif" width="16" height="16" title="Delete" alt="Delete"/>
		    				</a>
		    				<?php endif; ?>
		    			</span>
		    		</td>
		    	</tr>
		    	<?php endforeach;?>
		
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