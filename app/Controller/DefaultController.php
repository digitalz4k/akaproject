<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$params = array(
			'test' => false
		);
		$this->show('default/home', $params);
	}
	
	public function products()
	{
		$this->show('products/products');
	}
	
	public function productsSingle()
	{
		$this->show('products/product-single');
	}
	
	public function achievements()
	{
		$this->show('company/achievements');
	}
	
	public function company()
	{
		$this->show('company/company');
	}
	
	public function contact()
	{
		$this->show('contact/contact');
	}

}