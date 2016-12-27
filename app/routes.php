<?php
	
	// méthode GET ou POST, chemin, nom de classe, méthode de classe, nom de la route
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/products', 'Products#products', 'products'],
		['GET', '/products/[:id]', 'Products#productsSingle', 'products_single'],
		['GET', '/company', 'Default#company', 'company'],
		['GET', '/contact', 'Default#contact', 'contact'],
		['GET', '/dashboard', 'Dashboard#dashboard', 'dashboard'],
		
		['GET|POST', '/login', 'Auth#login', 'auth_login'],
		['GET', '/logout', 'Auth#logout', 'auth_logout'],
		['GET|POST', '/signup', 'Auth#signup', 'auth_signup'],
		['GET|POST', '/lostpassword', 'Auth#lostPassword', 'auth_lostpassword'],
		
		['GET', '/dashboard/dashboard-events', 'DashboardEvents#listEvents', 'events'],
		['GET|POST', '/dashboard/dashboard-events/[:id]', 'DashboardEvents#editEvents', 'edit_events'],
		['GET', '/achievements', 'Achievements#listAchievements', 'list_achievements']
	);
	
