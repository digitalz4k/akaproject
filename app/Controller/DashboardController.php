<?php
namespace Controller;

class DashboardController extends \W\Controller\Controller
{
    public function dashboard () {
        if(!empty($_FILES))
        {
            $upload = new \Controller\UploadController("uploads/", ['png', 'gif', 'jpg', 'jpeg']);
            
            $files = $upload->uploadThis($_FILES);
            
            debug($files);
            var_dump($files);
            

        } else {
            $this->show ("dashboard/dashboard");   
        }
        
    }
    
    public function login(){
        $this->show ("dashboard/login");
    }  
    
    public function lostPassword(){
        $this->show ("dashboard/lostPassword");
    }   
    public function newAccount(){
        $this->show ("dashboard/newAccount");
    }   
}

?>