<?php
    namespace Controller;
    
    class ProductsController extends \W\Controller\Controller
    {
        protected $db;
        
        public function __construct ()
        {
            $this->db = new \Model\ProductsModel;
        }
        
        public function products ()
        {
            $res = $this->db->findAll();
            $this->show ('products/products', ["products" => $res]);
        }
        
        public function productsSingle ($id)
        {

            $spec = new \Model\SpecificationsModel;
            
            $basic = $spec -> basicSpec($id);
            $details = $spec -> detailsSpec($id);
            $product = $this->db -> find($id);
            
            $this->show ('products/product-single', array('basic' => $basic, 'details' => $details, 'product' => $product));

        }
        
        public function productsList ()
        {
            $products = $this->db->findAll();
            $this->show('dashboard/tabs/products', ["products" => $products]);
        }
        
        public function productAdd ()
        {
            $this->show('dashboard/tabs/product-add');
        }
        
        public function productEdit ($id)
        {
            if(!empty($_POST))
            {
                $productUpdated = $_POST;
                $req = $this->db->update($productUpdated, $id);
            }
            else
            {
                $product = $this->db->find($id);
                $this->show('dashboard/tabs/product-edit', ["product" => $product]);
            }
        }
        
        public function productDelete ($id)
        {
            $product = $this->db->find($id);
            if($product)
            {
                $req = $this->db->delete($id);
            } else {
                // ERREUR A FINIR
                die("Product not found.");
            }
            
        }
        
    }

?>