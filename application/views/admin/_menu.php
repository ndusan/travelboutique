<ul>	
    <li>
        <a href="javascript:;" class="submenu-action" id="submenu-users">Users</a>
        <ul style="display: none;" class="submenu" id="users">
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
        <a href="javascript:;" class="submenu-action" id="submenu-pages">Pages</a>
        <ul style="display: none;" class="submenu" id="pages">
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
        <ul style="display: none;" class="submenu" id="carousel">
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'carousel'.DS.'add'.DS;?>">Add</a>
            </li>
            <li>
                <a href="<?php echo BASE_PATH.'admin'.DS.'carousel'.DS.'view'.DS;?>">View existing</a>
            </li>
       	</ul>
    </li>
    <li><a href="<?php echo BASE_PATH.'admin'.DS.'contact'.DS;?>">Contact</a></li>
    <li><a href="<?php echo BASE_PATH.'admin'.DS.'logout'.DS;?>">Logout</a></li>
</ul>