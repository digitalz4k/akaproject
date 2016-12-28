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
            /*if ($_FILES["website_logo"]["error"] !== 4)
            {
                $upload = new \Controller\UploadSingleton\UploadController("uploads/", ['png', 'gif', 'jpg', 'jpeg']);
                $file = $upload->uploadThis($_FILES);
                
                if($file[0]["file_upload_path"])
                {
                    $_POST["website_logo"] = $file[0]["file_upload_path"];
                } else {
                    $this->show('dashboard/tabs/settings', ["msg" => "An error occurred: not updated. Please try again."]);
                    return;
                }
            }*/
        }
        
        public function productEdit ($id)
        {
            if(!empty($_POST))
            {
                
                if ($_FILES["picture_url"]["error"] !== 4)
                {
                    $upload = new \Controller\UploadSingleton\UploadController("uploads/", ['png', 'gif', 'jpg', 'jpeg']);
                    $file = $upload->uploadThis($_FILES);
                    
                    if($file[0]["file_upload_path"])
                    {
                        $_POST["picture_url"] = $file[0]["file_upload_path"];
                    } else {
                        $this->show('dashboard/tabs/settings', ["msg" => "An error occurred: not updated. Please try again."]);
                        return;
                    }
                }
                
                $productUpdated = $_POST;
                $req = $this->db->update($productUpdated, $id);
                $this->redirectToRoute('dashboard_products_list');
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