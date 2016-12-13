<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/products', 'Default#products', 'products'],
		['GET', '/products/[:id]', 'Default#productsSingle', 'products_single'],
		['GET', '/achievements', 'Default#achievements', 'achievements'],
		['GET', '/company', 'Default#company', 'company'],
		['GET', '/contact', 'Default#contact', 'contact'],
	);