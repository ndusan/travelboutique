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
			<h2 class="title">newsletters / view existing</h2>
		    <!-- Data -->
		    <?php if(isset($newsletters) && !empty($newsletters)):?>
		    <div class="entry">
		    <table cellspacing="0" cellspacing="0">
                        <thead>
		    	<tr>
		    		<th>Email</th>
		    		<th>Modif</th>
		    	</tr>
                        </thead>
                        <tbody>
		    	<?php foreach($newsletters as $w):?>
		    	<tr onmouseover="className='tr_over'" onmouseout="className='tr_out'" class="tr_out">
		    		<td><?php echo $w['email'];?></td>
		    		<td><?php echo $w['modif'];?></td>
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