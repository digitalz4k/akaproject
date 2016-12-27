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
<<<<<<< HEAD
            $event = $this->db -> find($id);
            $this->show('dashboard/tabs/events-edit', ["event" => $event]);
        }
        else
        {
            $this->show('dashboard/tabs/events-edit');
=======
            $events = $this->db -> find($id);
            $this->show('dashboard/dashboard-editEvents', ["events" => $events]);
        }
        else
        {
            $this->show('dashboard/dashboard-editEvents');
>>>>>>> 28a2d275c22b5e6353b681bcf4fab87a70afb2a6
        }
    }
    
    public function eventDelete($id)
    {
        
    }
}

?>