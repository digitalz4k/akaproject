<?php
namespace Controller;

class DashboardEventsController extends \W\Controller\Controller
{
    protected $db;
    
    public function __construct()
    {
        $this->db = new \Model\EventsModel;
    }
    
    public function listEvents()
    {
        $res = $this->db->findAll();
        $this->show ('dashboard/dashboard-events', ["events" => $res]);
    }
    
    public function editEvents($id)
    {
        
    }
    
    public function deleteEvents($id)
    {
        
    }
}

?>