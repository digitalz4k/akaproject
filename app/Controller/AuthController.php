<?php

namespace Controller;

use \W\Controller\Controller;

class AuthController extends Controller
{
	
	protected $db;
    protected $auth;
     
    public function __construct ()
    {
        $this->db = new \Model\DashboardModel;
        $this->auth = new \W\Security\AuthentificationModel;
    }

	/**
	* Login template
	*/
	public function login ()
    {
        if(!empty($_POST)) // Traite le formulaire
        {
            $id = $this->auth->isValidLoginInfo($_REQUEST['email'], $_REQUEST['password']);
            if($id > 0)
            {
                $user = $this->db->find($id);
                $this->auth->logUserIn($user);
                $this->redirectToRoute('dashboard_home');
            } else {
                $this->show('auth/login', ["error" => "<p>Wrong email or password...</p>"]); // Affiche l'erreur sur la vue login
            }
        } else {
            $this->show('auth/login'); // Affiche la vue login
        }
    }
	
	/**
	* Signup template
	*/
	public function signup()
	{
		if(!empty($_POST)){
            $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
             
            $user = [
                'first_name' => $_REQUEST['first_name'],
                'last_name' => $_REQUEST['last_name'],
                'email' => $_REQUEST['email'],
                'password' => $password,
                'role' => 'user',
                'created_at' => date('Y-m-d h:i:s')
            ];
             
            $res = $this->db->insert($user);
             
            if($res > 0)
            {
                $this->redirectToRoute('auth_login');
            } else {
                $this->show('auth/dashboardAddUser', ["error" => "Error: User not added to database."]);
            }
             
        } else {
			$this->show('auth/signup');
        }
	}
	
	/**
	* Logout function
	*/
    public function logout ()
    {
        $this->auth->logUserOut();
        $this->redirectToRoute('home');
    }
    
    /**
	* Lost Password function
	*/
	public function lostPassword ()
	{
	    if(!empty($_POST)) {
	        $user = $this->db->search(["email" => $_POST['email']]);
	        if($user)
	        {
	           // renvoyer les informations de connexion par email
	           $this->show('auth/login', ["msg" => "Check your inbox at <span class='text-primary'>".$user[0]['email']."</span> to get your password."]);
	        } else {
	           $this->show('auth/lostpassword', ["error" => "Email not found."]);
	        }
	        // renvoyer les informations de connexion par email
	        // rediriger vers page login
	    } else {
		    $this->show('auth/lostpassword');
	    }
	}

}