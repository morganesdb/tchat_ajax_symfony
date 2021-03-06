<?php

namespace AppBundle\Controller;

use PDO;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

class DefaultController extends Controller
{
   /**
     * @Route("/", name="homepage")
     */
    public function getTchat()
    {
        
    return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/traitement", name="traitement")
     */
    public function Traitement(){
        // on se connecte à notre base de données

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=tchat', 'root', 'root');

}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}



if(isset($_POST['submit'])){ // si on a envoyé des données avec le formulaire



    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){ // si les variables ne sont pas vides

    

//        $pseudo = mysql_real_escape_string($_POST['pseudo']);
//
//        $message = mysql_real_escape_string($_POST['message']); // on sécurise nos données



        // puis on entre les données en base de données :

        $insertion = $bdd->prepare('INSERT INTO messages VALUES("", :pseudo, :message)');

        $insertion->execute(array(

            'pseudo' => $pseudo,

            'message' => $message

        ));



    }

    else{

        echo "Vous avez oublié de remplir un des champs !";

    }



}
        
    }
}
