<?php


    session_start();
    require("Modele/connexion.php");
    require("Vue/Commun.php");

if(!isset($_SESSION["userID"])){
        $erreur = "";
        print_r($_GET);
        if ($_GET['cible'] === 'verif'){
        include "Controler/inscription.php";
        }
        include("Controler/Connexion.php");
        include("Controler/inscription.php");


}
    else{
        if (isset($_GET['cible'])) {
            if ($_GET['cible'] == 'bouton2') {
                // Détruit toutes les variables de session
                $_SESSION = array();
                session_destroy();
                ob_clean();
                include("Vue/accueil_non_co.php");
            }
            if ($_GET['cible'] == 'Edition') {
                include("function.php");
            }
            if ($_GET['cible'] == 'affichecapteur') {
                include("Vue/affichecapteur.php");
            }

        }
        else  {
            include ("Vue/accueil_co.php");
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

            }

    */
        }
    }





