<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/products', 'Default#products', 'products'],
		['GET', '/products/[:id]', 'Default#productsSingle', 'products_single'],
		['GET', '/achievements', 'Default#achievements', 'achievements'],
		['GET', '/company', 'Default#company', 'company'],
		['GET', '/contact', 'Default#contact', 'contact'],
		['GET', '/dashboard', 'Dashboard#dashboard', 'dashboard_dashboard'],
		['GET', '/login', 'Dashboard#login', 'dashboard_login'],
		['GET', '/lostPassword', 'Dashboard#lostPassword', 'dashboard_lostPassword'],
		['GET', '/newAccount', 'Dashboard#newAccount', 'dashboard_newAccount'],
		
	);