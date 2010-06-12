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
			<h2 class="title">users / add new</h2>
		    <div class="warning" <?php if(!isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg($_GET['q']); ?></div>
			<div class="info" <?php if(isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg(DEFAULT_MSG); ?></div>
			<form id="form" name="form" action="<?php echo BASE_PATH.'admin'.DS.'users'.DS.'submit'.DS;?>" method="post">
				<?php include('_form.php'); ?>
			</form>
		</div>

	</div>
	<!-- end content --> 	

  <!-- start sidebar -->
  <div id="sidebar">
    <ul>
      <li>
        <h2><b>main menu</b></h2>
        <br/>
        <!-- <div class="info">Kliknite na naziv kategorije da biste uneli nove stavke.</div> -->
        <?php include_once(VIEW_PATH.'admin'.DS.'_menu.php'); ?>
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

