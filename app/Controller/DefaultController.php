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
		//On construit ici les data pour les passer à la vue Home qui affiche les events
		$tabEvents = new \Model\EventsModel;
		$events = $tabEvents->findAll();
		$this->show('default/home', ["events" => $events]);
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