// créer une classe products qui hérite de la classe Model et spécifier le namespace
// instancier une variable $db protégée pour communiquer avec la table des produits
// créer une méthode __construct qui assigne dans la variable $db l'objet du model ProductsController (qui gère la table "products" de la BDD)
// créer une méthode utilisée par le router pour afficher la page Products (regarder dans routes.php le nom à donner à cette méthode)
// dans cette méthode, lui faire afficher le template des produits

// 2eme étape :
// utiliser la fonction findAll() dans cette méthode pour récupérer tous les produits
// stocker un tableau contenant l'image, le titre, la description et l'id de chaque produit
// l'envoyer à la vue dans la fonction show() en deuxième paramètre => exemple : $this->show('default/home', $products)


// 3ème étape :
// créer une nouvelle méthode pour la route products details
// lui faire afficher le template des produits
// utiliser la fonction custom getProduct() pour récupérer les données d'un produit en particulier en lui passant l'ID en paramètre
// créer la function custom dans le fichier ProductsController
// stocker le résultat dans un tableau
// envoyer le tableau à la vue comme pour la méthode précédente



<?php

