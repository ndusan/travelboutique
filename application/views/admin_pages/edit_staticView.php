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
			<h2 class="title">pages / edit</h2>
		    <div class="warning" <?php if(!isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg($_GET['q']); ?></div>
			<div class="info" <?php if(isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg(DEFAULT_MSG); ?></div>
			<br/>
			<form id="form" name="form" action="<?php echo BASE_PATH.'admin'.DS.'pages'.DS.$params['id'].DS.'submit_static'.DS;?>" method="post">
			
<div class="entry">
    <?php if(isset($langs) && !empty($langs)):?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th colspan="2">Static page</th>
            </tr>
        </thead>
            <?php foreach($langs as $lang):?>
        <tr>
            <td>Name: <img src="<?php echo IMAGE_PATH.$lang['name'].'.png'; ?>" /> </td>
            <td>
                <input type="text" name="name[<?php echo $lang['id']; ?>]" value="<?php echo @$page[$lang['id']]['title']; ?>"/>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top;">Content: <img src="<?php echo IMAGE_PATH.$lang['name'].'.png'; ?>" /> </td>
            <td>
                <textarea cols="46" rows="10" name="content[<?php echo $lang['id']; ?>]" ><?php echo @$page[$lang['id']]['content']; ?></textarea>
            </td>
        </tr>
            <?php endforeach; ?>
    </table>
    <br/>
    <button type="submit">
			        Save changes
    </button>
    <?php endif; ?>
</div>

</form>
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
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced"
	});
</script>
