<?php
namespace Controller;

class DashboardController extends \W\Controller\Controller
{
    public function dashboard(){
        $this->show ("dashboard/dashboard");
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