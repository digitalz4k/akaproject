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
		['POST', '/events/add', 'Dashboard#eventsAdd', 'dashboard_events_add'],
		['POST', '/events/edit/[i:id]', 'Dashboard#eventsEdit', 'dashboard_events_edit'],
		['POST', '/events/delete/[i:id]', 'Dashboard#eventsDelete', 'dashboard_events_delete'],
		['GET', '/events/list', 'Dashboard#eventsList', 'dashboard_events_list'],
		/* DASHBOARD PRODUCTS ROUTES */
		['POST', '/products/add', 'Dashboard#productsAdd', 'dashboard_products_add'],
		['POST', '/products/edit/[i:id]', 'Dashboard#productsEdit', 'dashboard_products_edit'],
		['POST', '/products/delete/[i:id]', 'Dashboard#productsDelete', 'dashboard_products_delete'],
		['GET', '/products/list', 'Dashboard#productsList', 'dashboard_products_list'],
		/* DASHBOARD USERS ROUTES */
		['POST', '/users/add', 'Dashboard#usersAdd', 'dashboard_users_add'],
		['POST', '/users/edit/[i:id]', 'Dashboard#usersEdit', 'dashboard_users_edit'],
		['POST', '/users/delete/[i:id]', 'Dashboard#usersDelete', 'dashboard_users_delete'],
		['GET', '/users/list', 'Dashboard#usersList', 'dashboard_users_list'],
		/* DASHBOARD SETTINGS ROUTES */
		['GET', '/settings', 'Dashboard#usersAdd', 'dashboard_settings'],
		['POST', '/settings/edit/[i:id]', 'Dashboard#usersEdit', 'dashboard_settings_edit'],
		/* AUTHENTICATION ROUTES */
		['GET|POST', '/login', 'Auth#login', 'auth_login'],
		['GET', '/logout', 'Auth#logout', 'auth_logout'],
		['GET|POST', '/signup', 'Auth#signup', 'auth_signup'],
		['GET|POST', '/lostpassword', 'Auth#lostPassword', 'auth_lostpassword'],
	);