<?php
$routes = array(
				//Home page
				array(	'url' 			=> '/^$/', 
						'controller' 	=> 'home', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				//Login page
				array(	'url' 			=> '/^admin\/?$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/submit\/?$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//Admin panel
				array(	'url' 			=> '/^admin\/home\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/logout\/?$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'logout', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/users\/add\/?$/', 
						'controller' 	=> 'admin_users', 
					  	'action' 		=> 'add', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/users\/existing\/?$/', 
						'controller' 	=> 'admin_users', 
					  	'action' 		=> 'existing', 
					  	'layout' 		=> 'admin'
				),
				//Static pages
				array(	'url' 			=> '/^rent_a_car\/?$/', 
						'controller' 	=> 'rent_a_car', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^avio_karte\/?$/', 
						'controller' 	=> 'avio_karte', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				//Dynamic
				array(	'url' 			=> '/^(?P<parentName>[0-9a-zA-Z\-\_]+)\/?((?P<childName>[0-9a-zA-Z\-\_]+)\/?)*$/', 
						'controller' 	=> 'dynamic', 
					  	'action' 		=> 'page', 
					  	'layout' 		=> 'user'
				),
				
				
);
