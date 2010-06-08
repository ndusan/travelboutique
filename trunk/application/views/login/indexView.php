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
    <div class="warning" <?php if(!isset($_GET['q'])):?> style="display: none;" <?php endif;?>>Email and password doesn't match</div>
    <div class="info" <?php if(isset($_GET['q'])):?> style="display: none;" <?php endif;?>>Enter email and password to login</div>
    <div>
        <form method="post" action="<?php echo BASE_PATH.'admin'.DS.'submit'.DS; ?>" name="form-login">
            <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td align="right">Email:</td>
                    <td><input type="text" name="email" id="email" value="ndusan@gmail.com"/></td>
                    <td class="td_warning" id="r-email" style="display: none;">Required field</td>
                </tr>
                <tr>
                    <td align="right">Password:</td>
                    <td><input type="password" name="password" id="password" value="ndusan"/></td>
                    <td class="td_warning" id="r-passwd" style="display: none;">Required field</td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <button type="submit">Login</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<!-- end login -->