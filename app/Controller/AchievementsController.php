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
}




?>