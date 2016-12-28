<?php
namespace Controller;

class DashboardSettingsController extends \W\Controller\Controller
{
    protected $db;
    
    public function __construct()
    {
        $this->db = new \Model\WebsiteModel;
    }
    
    public function getSettings()
    {
        if(!empty($_POST))
        {
            $settingsToUpdate = $_POST;
            $req = $this->db->update($settingsToUpdate, 1);
            if ($req>0)
            {
                $res = $this->db->findAll();
                $this->redirectToRoute('dashboard_settings');
            } else {
                $this->show('dashboard/tabs/settings', ["msg" => "An error occurred: not updated. Please try again."]);
            }
        } else {
            $res = $this->db->findAll();
            $this->show ('dashboard/tabs/settings', ["settings" => $res[0]]);   
        }
    }
}

?>