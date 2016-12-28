<?php
namespace Controller;

class WebsiteController extends \W\Controller\Controller
{
    protected $db;
    
    public function __construct ()
    {
        $this->db = new \Model\WebsiteModel;
       
    }
    //  getWebsiteInformations() -->
    public function getWebsiteInformations()
    {
    //  appelée en GET-->
    //  recupérer toutes les informations de la table avec findAll()-->
    $res = $this->db->find(1);
    //  les passer à la vue-->
    //  dans les inputs dans l'attribut value passer les infos-->
    $this->show('website/website', ["infosWeb" =>$res]);

    }
    public function updateWebsiteInformations ()
    {
        // <!---> appelé en POST-->
      
        if(!empty($_POST))
        {
            $websiteUpdate = $_POST;
            
            $req = $this->db->update($websiteUpdate, 1);
            
            if($req>0)
            {
                $this->redirectToRoute('dashboard_settings');
            } else {
                $this->show('website/website', ["msg" => "Error: website informations not updated."])
            }
        }
        else
        {
            $res = $this->db->find(1);
            $this->show('website/website', ["infosWeb" =>$res])
        }
        
    }
    function verifierInput ($nameInput)
	{
		// JE VERIFIE SI L'INFO EST PRESENTE
		if (isset($_REQUEST[$nameInput]))
		{
			// ALORS JE LA RECUPERE
			$resultat = $_REQUEST[$nameInput];
		}
		else
		{
			// SINON, JE METS UNE VALEUR PAR DEFAUT (CHAINE VIDE)
			$resultat = "";
		}
	
		// AJOUTER DE LA SECURITE
		// FILTRE QUI ENLEVE LES BALISES HTML
		// http://php.net/manual/en/function.strip-tags.php
		$resultat = strip_tags($resultat);
		// http://php.net/manual/en/function.trim.php
		$resultat = trim($resultat);
		
		// RENVOIE LA VALEUR TROUVEE
		return $resultat;
	}
}
?>


<!--créer un WebsiteController.php-->
<!--avec dedans fonction getWebsiteInformations()-->
<!--et fonction updateWebsiteInformations ()-->
<!--(créer WebsiteModel)-->

<!--getWebsiteInformations() -->
<!---> appeler en GET-->
<!---> recupérer toutes les informations de la table avec findAll()-->
<!---> les passer à la vue-->
<!---> dans les inputs dans l'attribut value passer les infos-->


<!--updateWebsiteInformations()-->
<!---> appelé en POST-->
<!---> fonction appelé au clic sur le bouton Save ou Update-->
<!---> method POST sur le formulaire-->
<!---> prendre les infos de $_POST c'est un tableau-->
<!---> utiliser la fonction update($tableau, $id)-->
<!---> rediriger sur la vu-->