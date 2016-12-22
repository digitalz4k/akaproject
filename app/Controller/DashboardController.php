<?php
namespace Controller;

class DashboardController extends \W\Controller\Controller
{
    public function dashboard(){
        $this->allowTo('admin');
        $this->show ("dashboard/dashboard");
    }
}

?>