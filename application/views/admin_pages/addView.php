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
			<h2 class="title">pages / add new</h2>
		    <div class="warning" <?php if(!isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg($_GET['q']); ?></div>
			<div class="info" <?php if(isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg(DEFAULT_MSG); ?></div>
			<br/>
			<form id="form" name="form" action="<?php echo BASE_PATH.'admin'.DS.'pages'.DS.'submit'.DS;?>" method="post">
				<div class="entry">
			    <br/>
			    <?php if(isset($langs) && !empty($langs)):?>
			    <table cellpadding="0" cellspacing="0">
			        <?php foreach($langs as $lang):?>
			        <tr>
			            <td>Page Name: <img src="<?php echo IMAGE_PATH.$lang['name'].'.png'; ?>" /> </td>
			            <td><input type="text" name="name[<?php echo $lang['name']; ?>" value=""/></td>
			        </tr>
			        <?php endforeach; ?>
			        <tr>
			            <td>Level: </td>
			            <td>
			            	<select name="level">
			            		<?php foreach($levels as $level):?>
			            		<option value="0">Parent</option>
			            		<option value="<?php $level['id']; ?>">Child of <?php echo $level['name']; ?></option>
			            		<?php endforeach; ?>
			            	</select>
			            </td>
			        </tr>
			        <tr>
			            <td>Template: </td>
			            <td>
			            	<input type="radio" name="template" value="tmp1" checked="checked"/>
			            	<label>tmp1</label>
			            	<br/>
			            	<input type="radio" name="template" value="tmp1"/>
			            	<label>tmp2</label>
			            </td>
			        </tr>
			    </table>
			    <br/>
			    <button type="submit">
			        Create page
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

