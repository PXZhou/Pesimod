<?php

    //require("Vue/gestioncapteur.php");
    //require("Vue/affichecapteur.php");
    session_start();
    require("Vue/Commun.php");
    //require("Modele/connexion.php");
    /*$_SESSION["userID"] = $ligne['id'];
    include("Vue/accueil_co.php");*/


    if(!isset($_SESSION["userID"])){ //Utilisateur pas connecté
        include ("Vue/accueil_non_co.php");
        if(isset($_GET['cible'])) {
            if ($_GET['cible'] == 'se_connecter') {
                include("Controler/Connexion.php"); // On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros
            } else if ($_GET['cible'] == 's_inscrire') {
                ob_clean();
                include("Controler/inscription.php");
            }
        }
    }
    else  {
        include ("Vue/accueil_non_co.php");

    }


?>