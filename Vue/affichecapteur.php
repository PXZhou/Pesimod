<?php
    $title = "Affichage";
    $tete = "Affichage des capteurs";


    $contenu = "<ul id='onglet'>";
    $contenu .= "<li class='actif'>Chambre</li>";
    $contenu .= "<li>Salon</li>";
    $contenu .= "<li>Cuisine</li>";
    $contenu .= "<li>Salle de bain</li>";
    $contenu .= "</ul>";
    $contenu .= "<div id='contentonglet'> ";
    $contenu .= "<div class='item'> Contenu de la Chambre</div>";
    $contenu .= "<div class='item'> Contenu du Salon </div>";
    $contenu .= "<div class='item'> Contenu de la cuisine </div>";
    $contenu .= "<div class='item'> Contenu de la salle de bain </div>";
    $contenu .= "</div>";

    $jvscrpt = require('Vue/onglets.php');

    include 'Gabarit.php';

?>