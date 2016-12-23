<?php
namespace Controller;

class DashboardController extends \W\Controller\Controller
{
    public function dashboard () {
        if(!empty($_FILES["picture"]["name"]))
        {
            $upload = new \Controller\UploadSingleton\UploadController("uploads/", ['png', 'gif', 'jpg', 'jpeg']);
            
            $files = $upload->uploadThis($_FILES);
            $json = $upload->getJSON();
            
            debug($files);
            debug($json);

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