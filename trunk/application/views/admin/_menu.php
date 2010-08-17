<ul>	
    <li>
        <a href="javascript:;" class="submenu-action" id="submenu-users">Users</a>
        <ul <?php if(!isset($submenu) || $submenu!='users'):?>style="display: none;"<?php endif;?> class="submenu" id="users">
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'users'.DS.'add'.DS;?>">Add new</a>
            </li>
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'users'.DS;?>">View existing</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="<?php echo BASE_PATH.'admin'.DS.'language'.DS; ?>" >Language</a>
    </li>
    <li>
        <a href="javascript:;" class="submenu-action" id="submenu-partners">Partners</a>
        <ul <?php if(!isset($submenu) || $submenu!='partners'):?>style="display: none;"<?php endif;?> class="submenu" id="partners">
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'partners'.DS.'add'.DS;?>">Add partner</a>
            </li>
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'partners'.DS;?>">View partners</a>
            </li>
       	</ul>
    </li>
    <li>
        <a href="javascript:;" class="submenu-action" id="submenu-pages">Pages</a>
        <ul <?php if(!isset($submenu) || $submenu!='pages'):?>style="display: none;"<?php endif;?> class="submenu" id="pages">
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'pages'.DS.'add'.DS;?>">Add page</a>
            </li>
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'pages'.DS;?>">View pages</a>
            </li>
       	</ul>
    </li>
    <li>
        <a href="javascript:;" class="submenu-action" id="submenu-carousel">Carousel</a>
        <ul <?php if(!isset($submenu) || $submenu!='carousel'):?>style="display: none;"<?php endif;?> class="submenu" id="carousel">
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'carousel'.DS.'add'.DS;?>">Add</a>
            </li>
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'carousel'.DS;?>">View existing</a>
            </li>
       	</ul>
    </li>
    <li>
        <a href="javascript:;" class="submenu-action" id="submenu-banners">Banners</a>
        <ul <?php if(!isset($submenu) || $submenu!='banners'):?>style="display: none;"<?php endif;?> class="submenu" id="banners">
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'banners'.DS.'add'.DS;?>">Add</a>
            </li>
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'banners'.DS;?>">View existing</a>
            </li>
       	</ul>
    </li>
    <li><a href="<?php echo BASE_PATH.'admin'.DS.'menu'.DS;?>">Main menu</a></li>
    <li><a href="<?php echo BASE_PATH.'admin'.DS.'insurance'.DS;?>">Insurance</a></li>
    <li><a href="<?php echo BASE_PATH.'admin'.DS.'voucher'.DS;?>">Voucher</a></li>
    <li>
        <a href="javascript:;" class="submenu-action" id="submenu-weather">Weather</a>
        <ul <?php if(!isset($submenu) || $submenu!='weather'):?>style="display: none;"<?php endif;?> class="submenu" id="weather">
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'weather'.DS.'add'.DS;?>">Add</a>
            </li>
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'weather'.DS;?>">View existing</a>
            </li>
       	</ul>
    </li>
    <li><a href="<?php echo BASE_PATH.'admin'.DS.'newsletters'.DS;?>">Newsletters</a></li>
    <li><a href="<?php echo BASE_PATH.'admin'.DS.'logout'.DS;?>">Logout</a></li>
</ul>