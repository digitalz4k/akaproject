<?php

    namespace Model;
    
    use \W\Model\Model;
    
    class ProductsModel extends Model
    {
        public function getProduct($id)
        {
            $specifications = new \Model\SpecificationsModel;
            
            $tabSearch = $specifications->search(['product_id' => $id], 'AND');
            
            $product = $this->find($id);
            
            $res = ['product' => $product, 'spec' => $tabSearch];
            
            return $res;
        }
    }
    
// Créer une classe ProductsModel, qui hérite de Model, en spécifiant le namespace
    //ok

// Créer une méthode getProduct() qui prend en paramètre un id
    //ok
// créer dans cette méthode une variable $specifications qui est une instance de SpecificationsModel
    //ok
// utiliser la funtion search() pour récupérer toutes les specs qui contiennent l'id du produit dans la colonne product_id => exemple: search()
    //ok
// 
    
?>