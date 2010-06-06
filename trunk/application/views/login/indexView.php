<!-- start header -->
<div id="header">
  <div id="logo">
    <h1>ADMIN PANEL</h1>
    <h2>www.travelbutique.rs</h2>
  </div>
</div>
<!-- end header -->

<!-- login page -->
<div id="login">
	<div class="warning" <?php if(!isset($setWarning)):?> style="display: none;" <?php endif;?>>Email and password doesn't match</div>
	<div class="info" <?php if(isset($setWarning)):?> style="display: none;" <?php endif;?>>Enter email and password to login</div>
	<br/>
	<div style="margin: 30px 0px 0px 300px;">
	<form method="post" action="<?php echo BASE_PATH.'admin'.DS.'submit'.DS; ?>" name="form-login">
		<table>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" id="email" value=""/></td>
				<td class="td_warning" id="r-email" style="display: none;">Required field</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="passwd" id="passwd" value=""/></td>
				<td class="td_warning" id="r-passwd" style="display: none;">Required field</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<br/>
			        <button type="submit">Login</button>
				</td>
			</tr>
		</table>
	</form>
	</div>
</div>
<!-- end login -->