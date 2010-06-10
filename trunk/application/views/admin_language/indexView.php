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
            <h2 class="title">language / view existing</h2>
            <div class="info" <?php if(!isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg($_GET['q']); ?></div>
            <div class="info" <?php if(isset($_GET['q'])):?> style="display: none;" <?php endif;?>><?php echo $html->msg('Set language visible'); ?></div>
            <br/>
            <br/>
            <!-- Data -->
            <?php if(isset($langs) && !empty($langs)):?>
            <div class="entry">
                <table cellspacing="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($langs as $lang):?>
                    <tr>
                        <td><?php echo $lang['name'];?></td>
                        <td>
                            <input type="checkbox" name="" onclick="javascript:document.location.href='<?php echo BASE_PATH.'admin'.DS.'language'.DS.$lang['id'].DS.'edit'.DS.(1 - $lang['active']).DS; ?>'" value="" <?php echo ($lang['active']==1 ? "checked='checked'" : ""); ?>/>
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