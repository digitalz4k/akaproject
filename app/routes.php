<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/products', 'Products#products', 'products'],
		['GET', '/products/[:id]', 'Products#productsSingle', 'products_single'],
		['GET', '/achievements', 'Default#achievements', 'achievements'],
		['GET', '/company', 'Default#company', 'company'],
		['GET', '/contact', 'Default#contact', 'contact'],
		['GET', '/dashboard', 'Dashboard#dashboard', 'dashboard'],
		
		['GET|POST', '/login', 'Auth#login', 'auth_login'],
		['GET', '/logout', 'Auth#logout', 'auth_logout'],
		['GET|POST', '/signup', 'Auth#signup', 'auth_signup'],
		['GET|POST', '/lostpassword', 'Auth#lostPassword', 'auth_lostpassword'],
	);