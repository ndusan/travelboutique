
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

	<div class="entry">
	    <table cellpadding="0" cellspacing="0">
	        <thead>
	            <tr>
	                <th colspan="4">Set voucher</th>
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
	            <tr>
	                <td class="td_title">Name: </td>
	                <td><input type="text" name="firstname" id="firstname" value="<?php echo @$user['firstname'];?>"/></td>
	                <td class="td_warning" id="r-firstname" style="display: none;">Required field</td>
	            </tr>
	            <tr>
	                <td class="td_title">Surname: </td>
	                <td><input type="text" name="lastname" id="lastname" value="<?php echo @$user['lastname'];?>"/></td>
	                <td class="td_warning" id="r-lastname" style="display: none;">Required field</td>
	            </tr>
	            <tr>
	                <td class="td_title">Email: </td>
	                <td><input type="text" name="email" id="email" value="<?php echo @$user['email'];?>" <?php echo (isset($user['id']) ? "disabled='disabled'": "");?>/></td>
	                <td class="td_warning" id="r-email" style="display: <?php echo (isset($emailInUse) ? '' : 'none');?>;" ><?php echo (isset($emailInUse) ? 'Email already in use' : 'Required field');?></td>
	            </tr>
	            <tr>
	                <td class="td_title">Password (min 5 char.): </td>
	                <td><input type="text" name="password" id="password" value="<?php echo @$user['passwd'];?>"/></td>
	                <td class="td_warning" id="r-password" style="display: none;">Required field</td>
	            </tr>
	        </tbody>
	    </table>
	
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

<!-- start footer -->
<div id="footer">
    <p id="legal">(c) 2010 TravelButique.rs</p>
</div>
<!-- end footer -->