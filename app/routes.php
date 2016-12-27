<?php
	
	// méthode GET ou POST, chemin, nom de classe, méthode de classe, nom de la route
	$w_routes = array(
		/* GENERAL ROUTES */
		['GET', '/', 'Default#home', 'home'],
		['GET', '/products', 'Products#products', 'products'],
		['GET', '/products/[:id]', 'Products#productsSingle', 'products_single'],
		['GET', '/achievements', 'Default#achievements', 'achievements'],
		['GET', '/company', 'Default#company', 'company'],
		['GET', '/contact', 'Default#contact', 'contact'],
		/* DASHBOARD ROUTE */
		['GET', '/aka-admin/', 'Dashboard#dashboard', 'dashboard'],
		/* DASHBOARD EVENTS ROUTES */
		['POST', '/aka-admin/events/add', 'Events#eventsAdd', 'dashboard_events_add'],
		['POST', '/aka-admin/events/edit/[i:id]', 'Events#eventsEdit', 'dashboard_events_edit'],
		['POST', '/aka-admin/events/delete/[i:id]', 'Events#eventsDelete', 'dashboard_events_delete'],
		['GET', '/aka-admin/events/list', 'Events#eventsList', 'dashboard_events_list'],
		/* DASHBOARD PRODUCTS ROUTES */
		['POST', '/aka-admin/products/add', 'Products#productsAdd', 'dashboard_products_add'],
		['POST', '/aka-admin/products/edit/[i:id]', 'Products#productsEdit', 'dashboard_products_edit'],
		['POST', '/aka-admin/products/delete/[i:id]', 'Products#productsDelete', 'dashboard_products_delete'],
		['GET', '/aka-admin/products/list', 'Products#productsList', 'dashboard_products_list'],
		/* DASHBOARD USERS ROUTES */
		['GET|POST', '/aka-admin/users/add', 'Users#usersAdd', 'dashboard_users_add'],
		['GET|POST', '/aka-admin/users/edit/[:id]', 'Users#usersEdit', 'dashboard_users_edit'],
		['GET', '/aka-admin/users/delete/[:id]', 'Users#usersDelete', 'dashboard_users_delete'],
		['GET', '/aka-admin/users/list', 'Users#usersList', 'dashboard_users_list'],
		/* DASHBOARD SETTINGS ROUTES */
		['GET|POST', '/aka-admin/settings', 'DashboardSettings#getSettings', 'dashboard_settings'],
		/* AUTHENTICATION ROUTES */
		['GET|POST', '/login', 'Auth#login', 'auth_login'],
		['GET', '/logout', 'Auth#logout', 'auth_logout'],
		['GET|POST', '/signup', 'Auth#signup', 'auth_signup'],
		['GET|POST', '/lostpassword', 'Auth#lostPassword', 'auth_lostpassword'],
		
		['GET', '/dashboard/dashboard-events', 'DashboardEvents#listEvents', 'events'],
		['GET|POST', '/dashboard/dashboard-events/[:id]', 'DashboardEvents#editEvents', 'edit_events']
	);
	
