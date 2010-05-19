<?php
//Site
define('SITE', 'http://travelboutique');//http://localhost
//App root
define('APP_ROOT', '');
define('IN_DEV', true);

//Messages
define('SUCCESS_MSG', 'Success');
define('ERROR_MSG', 'Error');
define('EMAIL_ERROR_MSG', 'Email already in use');

//DB params
define('DB_HOST', 'localhost');
define('DB_NAME', 'travelboutique');
define('DB_USER', 'root');
define('DB_PASS', '');

define('BASE_PATH', SITE.DS.APP_ROOT);

//Cookie life (by default 15min)
define('COOKIE_LIFE', 15*60*60);

//Paths
define('CONTROLLER_PATH', 'application'.DS.'controllers'.DS);
define('MODEL_PATH', 'application'.DS.'models'.DS);
define('VIEW_PATH', 'application'.DS.'views'.DS);
define('LAYOUT_PATH', 'application'.DS.'views'.DS.'layout'.DS);

//Public paths
define('IMAGE_PATH', BASE_PATH.'public'.DS.'images'.DS);
define('CSS_PATH', BASE_PATH.'public'.DS.'css'.DS);
define('JS_PATH', BASE_PATH.'public'.DS.'js'.DS);
define('UPLOAD_PATH', 'public'.DS.'uploads'.DS);