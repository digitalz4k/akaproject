<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/products', 'Products#products', 'products'],
		['GET', '/products/[:id]', 'Products#productsSingle', 'products_single'],
		['GET', '/achievements', 'Default#achievements', 'achievements'],
		['GET', '/company', 'Default#company', 'company'],
		['GET', '/contact', 'Default#contact', 'contact'],
		
		['GET', '/aka-admin/', 'Dashboard#dashboard', 'dashboard_home'],
		
		['GET|POST', '/aka-admin/login', 'Auth#login', 'auth_login'],
		['GET', '/aka-admin/logout', 'Auth#logout', 'auth_logout'],
		//['GET|POST', '/aka-admin/signup', 'Auth#signup', 'auth_signup'],
		['GET|POST', '/aka-admin/lostpassword', 'Auth#lostPassword', 'auth_lostpassword'],
	);