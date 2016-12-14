<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/products', 'Products#products', 'products'],
		['GET', '/products/[:id]', 'Products#productsSingle', 'products_single'],
		['GET', '/achievements', 'Default#achievements', 'achievements'],
		['GET', '/company', 'Default#company', 'company'],
		['GET', '/contact', 'Default#contact', 'contact'],
	);