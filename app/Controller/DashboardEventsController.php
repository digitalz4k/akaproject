<?php
namespace Controller;

class DashboardEventsController extends \W\Controller\Controller
{
    protected $db;
    
    public function __construct()
    {
        $this->db = new \Model\EventsModel;
    }
    
    public function eventsList()
    {
        $res = $this->db->findAll();
        $this->show ('dashboard/tabs/events', ["events" => $res]);
    }
    
    public function eventEdit($id)
    {
        if(!empty($_POST))
        {
            $event = $this->db -> find($id);
            $this->show('dashboard/tabs/events-edit', ["event" => $event]);
        }
        else
        {
            $this->show('dashboard/tabs/events-edit');
        }
    }
    
    public function eventDelete($id)
    {
        
    }
}

?>