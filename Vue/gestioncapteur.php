
<?php
        require("test divers.php");
        $title = "Editeur";
        $tete = "Editeur";



        $contenu = "<ul id='onglet'>";
        $contenu .= "<li class='actif'>RDC</li>";
        for ($Nbre_etage = 0;$Nbre_etage<= get_etage(get);$Nbre_etage++){
            $contenu .= "<li> Etage $Nbre_etage </li>";
        }
        $contenu .= "<li>Ajouter/Supprimer Etage(s)</li>";
        $contenu .= "</ul>";
        $contenu .= "<div id='contentonglet'> ";
        affichage_selon_etage(0);
        Ajouter(0);
        $contenu .= "<div class='item'>  </div>";
        /*for ($Nbre_etage = 1;$Nbre_etage<= get_etage('Wayne');$Nbre_etage++){
            $Affiche = affichage_selon_etage($Nbre_etage);
            $Ajout = Ajouter($Nbre_etage);
            $contenu .= "<div class='item'> </div>";
        }*/

        $contenu .=  "<div class='item'>  </div>";
        $contenu .= "</div>";

        $jvscrpt = require('Vue/onglets.php');


        include 'Gabarit.php';

?>
