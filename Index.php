<?php


    session_start();
    require("Modele/connexion.php");
    require("Vue/Commun.php");

if(!isset($_SESSION["userID"])){
    $info_ins = "";
    $erreur = "";
    if (isset($_GET['cible'])) {
        if ($_GET['cible'] == 'verif_ins') {
            include "Controler/inscription.php";
        } else if ($_GET['cible'] == 'verif_co') {
            include "Controler/Connexion.php";
        }
    }
    else{
        include "Vue/non_connecte.php";
    }

}
else  {
    include ("Vue/accueil_co.php");
    if (isset($_GET['cible']) == 'deco'){
        include "Controler/Deconnexion.php";

    }

    /*if (isset($_GET['cible'])){
        if ($_GET['cible'] == 'bouton2'){
            // Détruit toutes les variables de session
            $_SESSION = array();
            session_destroy();
            ob_clean();
            include("Vue/accueil_non_co.php");
        }
        else if ($_GET['cible'] == 'Mon_Compte'){

        }
        else if ($_GET['cible'] == 'Maison'){

        }
        else if ($_GET['cible'] == 'Calendrier'){

        }
        else if ($_GET['cible'] == 'Edition'){
            ob_clean();
            include ("function.php");

        }
    */
    }










