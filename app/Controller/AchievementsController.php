<?php
namespace Controller;

class AchievementsController extends \W\Controller\Controller
{
    protected $db;
    
    public function __construct()
    {
        $this->db = new \Model\AchievementsModel;
    }
    
    public function listAchievements()
    {
        $res = $this->db->findAll();
        $this->show ('company/achievements', ["achievements" => $res]);

    }
    
    public function singleAchievement($id)
    {
        if(!empty($_POST))
        {
            $res = $this->db -> find($id);
            $this->show('company/achievements', ["achievements" => $res]);
        }
        else
        {
            $this->show('company/achievements');
        }
    }
}




?>