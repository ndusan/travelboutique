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
				array(	'url' 			=> '/^admin\/newsletters\/?$/', 
						'controller' 	=> 'admin_newsletters', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/logout\/?$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'logout', 
					  	'layout' 		=> 'empty'
				),
				//Users
				array(	'url' 			=> '/^admin\/users\/add\/?$/', 
						'controller' 	=> 'admin_users', 
					  	'action' 		=> 'add', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/users\/?$/', 
						'controller' 	=> 'admin_users', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/users\/submit\/?$/', 
						'controller' 	=> 'admin_users', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/users\/(?P<id>\d+)\/edit\/?$/', 
						'controller' 	=> 'admin_users', 
					  	'action' 		=> 'edit', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/users\/(?P<id>\d+)\/delete\/?$/', 
						'controller' 	=> 'admin_users', 
					  	'action' 		=> 'delete', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/users\/(?P<id>\d+)\/submit\/?$/', 
						'controller' 	=> 'admin_users', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//Pages
				array(	'url' 			=> '/^admin\/pages\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/pages\/add\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'add', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/edit\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'edit', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/edit_static\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'edit_static', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/submit_static\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'submit_static', 
					  	'layout' 		=> 'edit'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/more\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'more', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/delete\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'delete', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/more\/submit\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'submitMore', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/more\/(?P<item_id>\d+)\/edit\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'more', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/more\/(?P<item_id>\d+)\/up\/(?P<position>\d+)\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'up', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/more\/(?P<item_id>\d+)\/down\/(?P<position>\d+)\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'down', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/more\/submit\/(?P<item_id>\d+)\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'submitMore', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/more\/(?P<item_id>\d+)\/delete\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'deleteMore', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/pages\/submit\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/pages\/(?P<id>\d+)\/submit\/?$/', 
						'controller' 	=> 'admin_pages', 
					  	'action' 		=> 'update', 
					  	'layout' 		=> 'empty'
				),
				//Partners
				array(	'url' 			=> '/^admin\/partners\/?$/', 
						'controller' 	=> 'admin_partners', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/partners\/add\/?$/', 
						'controller' 	=> 'admin_partners', 
					  	'action' 		=> 'add', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/partners\/(?P<id>\d+)\/edit\/?$/', 
						'controller' 	=> 'admin_partners', 
					  	'action' 		=> 'edit', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/partners\/(?P<id>\d+)\/delete\/?$/', 
						'controller' 	=> 'admin_partners', 
					  	'action' 		=> 'delete', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/partners\/((?P<id>\d+)\/)?submit\/?$/', 
						'controller' 	=> 'admin_partners', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//Carousel
				array(	'url' 			=> '/^admin\/carousel\/?$/', 
						'controller' 	=> 'admin_carousel', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/carousel\/add\/?$/', 
						'controller' 	=> 'admin_carousel', 
					  	'action' 		=> 'add', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/carousel\/(?P<id>\d+)\/edit\/?$/', 
						'controller' 	=> 'admin_carousel', 
					  	'action' 		=> 'edit', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/carousel\/(?P<id>\d+)\/delete\/?$/', 
						'controller' 	=> 'admin_carousel', 
					  	'action' 		=> 'delete', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/carousel\/((?P<id>\d+)\/)?submit\/?$/', 
						'controller' 	=> 'admin_carousel', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/carousel\/(?P<id>\d+)\/(?P<position>\d+)\/up\/?$/', 
						'controller' 	=> 'admin_carousel', 
					  	'action' 		=> 'up', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/carousel\/(?P<id>\d+)\/(?P<position>\d+)\/down\/?$/', 
						'controller' 	=> 'admin_carousel', 
					  	'action' 		=> 'down', 
					  	'layout' 		=> 'empty'
				),
				//Banners
				array(	'url' 			=> '/^admin\/banners\/?$/', 
						'controller' 	=> 'admin_banners', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/banners\/add\/?$/', 
						'controller' 	=> 'admin_banners', 
					  	'action' 		=> 'add', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/banners\/(?P<id>\d+)\/edit\/?$/', 
						'controller' 	=> 'admin_banners', 
					  	'action' 		=> 'edit', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/banners\/(?P<id>\d+)\/delete\/?$/', 
						'controller' 	=> 'admin_banners', 
					  	'action' 		=> 'delete', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/banners\/((?P<id>\d+)\/)?submit\/?$/', 
						'controller' 	=> 'admin_banners', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/banners\/(?P<id>\d+)\/(?P<position>\d+)\/up\/?$/', 
						'controller' 	=> 'admin_banners', 
					  	'action' 		=> 'up', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/banners\/(?P<id>\d+)\/(?P<position>\d+)\/down\/?$/', 
						'controller' 	=> 'admin_banners', 
					  	'action' 		=> 'down', 
					  	'layout' 		=> 'empty'
				),
				//Weather
				array(	'url' 			=> '/^admin\/weather\/?$/', 
						'controller' 	=> 'admin_weather', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/weather\/add\/?$/', 
						'controller' 	=> 'admin_weather', 
					  	'action' 		=> 'add', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/weather\/(?P<id>\d+)\/edit\/?$/', 
						'controller' 	=> 'admin_weather', 
					  	'action' 		=> 'edit', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/weather\/(?P<id>\d+)\/delete\/?$/', 
						'controller' 	=> 'admin_weather', 
					  	'action' 		=> 'delete', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/weather\/((?P<id>\d+)\/)?submit\/?$/', 
						'controller' 	=> 'admin_weather', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//Main menu
				array(	'url' 			=> '/^admin\/menu\/?$/', 
						'controller' 	=> 'admin_menu', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/menu\/(?P<id>\d+)\/set\/?$/', 
						'controller' 	=> 'admin_menu', 
					  	'action' 		=> 'set', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/menu\/(?P<id>\d+)\/(?P<position>\d+)\/up\/?$/', 
						'controller' 	=> 'admin_menu', 
					  	'action' 		=> 'up', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/menu\/(?P<id>\d+)\/(?P<position>\d+)\/down\/?$/', 
						'controller' 	=> 'admin_menu', 
					  	'action' 		=> 'down', 
					  	'layout' 		=> 'empty'
				),
				//Languages
				array(	'url' 			=> '/^admin\/language\/?$/', 
						'controller' 	=> 'admin_language', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/language\/(?P<id>\d+)\/edit\/(?P<active>\d+)\/?$/', 
						'controller' 	=> 'admin_language', 
					  	'action' 		=> 'edit', 
					  	'layout' 		=> 'admin'
				),
				//Insurance
				array(	'url' 			=> '/^admin\/insurance\/?$/', 
						'controller' 	=> 'admin_insurance', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/insurance\/submit\/?$/', 
						'controller' 	=> 'admin_insurance', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//Voucher
				array(	'url' 			=> '/^admin\/voucher\/?$/', 
						'controller' 	=> 'admin_voucher', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/voucher\/submit\/?$/', 
						'controller' 	=> 'admin_voucher', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//Static pages
				array(	'url' 			=> '/^rent-a-car\/?$/', 
						'controller' 	=> 'rent_a_car', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^rent-a-car\/submit\/?$/', 
						'controller' 	=> 'rent_a_car', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^avio-karte\/?$/', 
						'controller' 	=> 'avio_karte', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^avio-karte\/submit\/?$/', 
						'controller' 	=> 'avio_karte', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^contact\/?$/', 
						'controller' 	=> 'contact', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^contact\/submit\/?$/', 
						'controller' 	=> 'contact', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^about-us\/?$/', 
						'controller' 	=> 'about_us', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^hotels\/?$/', 
						'controller' 	=> 'hotels', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^hotels\/submit\/?$/', 
						'controller' 	=> 'hotels', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//Home page
				array(	'url' 			=> '/^ajax-news\/?$/', 
						'controller' 	=> 'home', 
					  	'action' 		=> 'news', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^ajax-get-weather\/?$/', 
						'controller' 	=> 'home', 
					  	'action' 		=> 'getWeather', 
					  	'layout' 		=> 'empty'
				),
				//Dynamic
				array(	'url' 			=> '/^(?P<parentName>[a-zA-Z0-9\_\-%]+)\/?((?P<childName>[a-zA-Z0-9\_\-%]+)\/?)*$/u', 
						'controller' 	=> 'dynamic', 
					  	'action' 		=> 'page', 
					  	'layout' 		=> 'user'
				),
				
				
				
);
