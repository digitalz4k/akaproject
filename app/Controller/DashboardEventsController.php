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
        if(!empty($_POST))
        {
            $events = $this->db -> find($id);
            $this->show('dashboard/dashboard-editEvents', ["events" => $events]);
        }
        else
        {
            $this->show('dashboard/dashboard-editEvents');
        }
    }
    
    public function deleteEvents($id)
    {
        
    }
}

?>