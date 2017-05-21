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
                include("Controler/Connexion.php");
            } else if ($_GET['cible'] == 's_inscrire') {
                include("Controler/inscription.php");
            } else if ($_GET['cible'] == 'affichecapteur'){
                include("Vue/affichecapteur.php");
            } else if ($_GET['cible'] == 'accueil') {
                include("Vue/accueil.php");
            }
        }
    }
    else  {
        include ("Vue/accueil_non_co.php");

    }


?>