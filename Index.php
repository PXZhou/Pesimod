<?php

    //require("Vue/gestioncapteur.php");
    //require("Vue/affichecapteur.php");
    session_start();
    require("Vue/Commun.php");
    //require("Modele/connexion.php");
    /*$_SESSION["userID"] = $ligne['id'];
    include("Vue/accueil_co.php");*/


    if(!isset($_SESSION["userID"])){
        //include ("Vue/accueil_non_co.php");
        include ("Vue/accueil_co.php");
        if(isset($_GET['cible'])) {
            if ($_GET['cible'] == 'se_connecter') {
                ob_clean();
                include("Controler/Connexion.php");
            } else if ($_GET['cible'] == 's_inscrire') {
                ob_clean();
                include("Controler/inscription.php");
            } else if ($_GET['cible'] == 'affichecapteur'){
                ob_clean();
                include("Vue/affichecapteur.php");
            } else if ($_GET['cible'] == 'accueil') {
                ob_clean();
                include("Vue/accueil.php");
            }
        }
    }
    else  {
        include ("Vue/accueil_non_co.php");

    }


?>