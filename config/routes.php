<?php
$routes = array(
				//Home page
				array(	'url' 			=> '/^$/', 
						'controller' 	=> 'home', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^admin\/?$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'index', 
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
				array(	'url' 			=> '/^(?P<parentName>[0-9a-zA-Z\-\_]+)\/?$/', 
						'controller' 	=> 'dynamic', 
					  	'action' 		=> 'parentPage', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^(?P<parentName>[0-9a-zA-Z\-\_]+)\/(?P<childName>[0-9a-zA-Z\-\_]+)\/?$/', 
						'controller' 	=> 'dynamic', 
					  	'action' 		=> 'childPage', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^admin\/home\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				
);
