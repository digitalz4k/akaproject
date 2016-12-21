<?php

namespace Controller;

use \W\Controller\Controller;

class ProductsController extends Controller
{

    public function productsSingle($id)
    {
        $db = new \Model\SpecificationsModel;
        
        $basic = $db->basicSpec($id);
        
        $this->show("products/product-single", [
            "product" => "product", 
            "basicSpec" => $basic, 
            "detailsSpec" => "detailsSpecs"
        ]);
    }

}