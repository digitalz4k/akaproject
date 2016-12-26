<?php
	
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
		['POST', '/events/add', 'Events#eventsAdd', 'dashboard_events_add'],
		['POST', '/events/edit/[i:id]', 'Events#eventsEdit', 'dashboard_events_edit'],
		['POST', '/events/delete/[i:id]', 'Events#eventsDelete', 'dashboard_events_delete'],
		['GET', '/events/list', 'Events#eventsList', 'dashboard_events_list'],
		/* DASHBOARD PRODUCTS ROUTES */
		['POST', '/products/add', 'Products#productsAdd', 'dashboard_products_add'],
		['POST', '/products/edit/[i:id]', 'Products#productsEdit', 'dashboard_products_edit'],
		['POST', '/products/delete/[i:id]', 'Products#productsDelete', 'dashboard_products_delete'],
		['GET', '/products/list', 'Products#productsList', 'dashboard_products_list'],
		/* DASHBOARD USERS ROUTES */
		['GET|POST', '/users/add', 'Users#usersAdd', 'dashboard_users_add'],
		['GET|POST', '/users/edit/[:id]', 'Users#usersEdit', 'dashboard_users_edit'],
		['GET', '/users/delete/[:id]', 'Users#usersDelete', 'dashboard_users_delete'],
		['GET', '/users/list', 'Users#usersList', 'dashboard_users_list'],
		/* DASHBOARD SETTINGS ROUTES */
		['GET', '/settings', 'Settings#usersAdd', 'dashboard_settings'],
		['POST', '/settings/edit/[i:id]', 'Settings#usersEdit', 'dashboard_settings_edit'],
		/* AUTHENTICATION ROUTES */
		['GET|POST', '/login', 'Auth#login', 'auth_login'],
		['GET', '/logout', 'Auth#logout', 'auth_logout'],
		['GET|POST', '/signup', 'Auth#signup', 'auth_signup'],
		['GET|POST', '/lostpassword', 'Auth#lostPassword', 'auth_lostpassword'],
	);