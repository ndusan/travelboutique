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


	</div>
	<!-- end content --> 	

  <!-- start sidebar -->
  <div id="sidebar">
    <ul>
      <li>
        <h2><b>main menu</b></h2>
        <!-- <div class="info">Kliknite na naziv kategorije da biste uneli nove stavke.</div> -->
        <br/>
        <ul>
          <li>
          	<a href="#" id="admin-menu">Adminstrator</a>
          	<ul style="display: none;" id="admin-submenu" class="submenu" >
                    <li><a href="<?php echo BASE_PATH;?>cms/admin/add/">Add new</a></li>
                        <li><a href="<?php echo BASE_PATH;?>cms/admin/view/">View existing</a></li>
                    </ul>	
		          </li>
		          <li><a href="<?php echo BASE_PATH;?>cms/lang/">Languages</a></li>
          <li>
          	<a href="#" id="pages-menu">Pages</a>
          	<ul style="display: none;" id="pages-submenu" class="submenu2" >
                    <li><a href="<?php echo BASE_PATH;?>cms/pages/manage-all">Manage all pages</a></li>
                        <li><a href="<?php echo BASE_PATH;?>cms/pages/manage-static/">Manage static pages</a></li>
                        <li><a href="<?php echo BASE_PATH;?>cms/pages/manage-dynamic/">Manage dynamic pages</a></li>
                    </ul>
          </li>
          <li><a href="<?php echo BASE_PATH;?>cms/contact/">Contact form</a></li>
          <li><a href="<?php echo BASE_PATH;?>cms/application/">Application from</a></li>
          <li><a href="<?php echo BASE_PATH;?>cms/info/">Company info</a></li>
          <li><a href="<?php echo BASE_PATH;?>cms/logout/">Logout</a></li>
        </ul>
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