<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/products', 'Default#products', 'products'],
		['GET', '/products/[:id]', 'Products#productsSingle', 'products_single'],
		['GET', '/achievements', 'Default#achievements', 'achievements'],
		['GET', '/company', 'Default#company', 'company'],
		['GET', '/contact', 'Default#contact', 'contact'],
<<<<<<< HEAD
		
		['GET|POST', '/login', 'Auth#login', 'auth_login'],
		['GET', '/logout', 'Auth#logout', 'auth_logout'],
		['GET|POST', '/signup', 'Auth#signup', 'auth_signup'],
		['GET|POST', '/lostpassword', 'Auth#lostPassword', 'auth_lostpassword'],
=======
		['GET', '/dashboard', 'Dashboard#dashboard', 'dashboard_dashboard'],
		['GET', '/login', 'Dashboard#login', 'dashboard_login'],
		['GET', '/lostPassword', 'Dashboard#lostPassword', 'dashboard_lostPassword'],
		['GET', '/newAccount', 'Dashboard#newAccount', 'dashboard_newAccount'],
		
>>>>>>> slider
	);