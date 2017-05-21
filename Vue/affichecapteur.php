<?php
    $title = "Affichage";
    $tete = "Affichage des capteurs";


    $contenu = "<ul id='onglet'>";
    $contenu .= "<li class='actif'>Chambre</li>";
    $contenu .= "<li>Salon</li>";
    $contenu .= "<li>Cuisine</li>";
    $contenu .= "<li>Salle de bain</li>";
    $contenu .= "<li>+</li>";
    $contenu .= "</ul>";
    $contenu .= "<div id='contentonglet'> ";
    $contenu .= "<div class='item'> Contenu de la Chambre</div>";
    $contenu .= "<div class='item'> Contenu du Salon </div>";
    $contenu .= "<div class='item'> Contenu de la cuisine </div>";
    $contenu .= "<div class='item'> Contenu de la salle de bain </div>";
    $contenu .= "<div class='item'>";
    $contenu .= "
<form method='post' action='list_detail.php'>
    <p>Nom de la pièce : <input type='text' name='nom_piece' /></p>
    <p>Type de pièce : 
    <select name='typepiece'>
        <option name='Cuisine'>Cuisine</option>
        <option name='SalledeBain'>Salle de Bain</option>
        <option name='Salon'>Salon</option>
        <option name='Chambre'>Chambre</option>
        <option name='Pieceavivre'>Pièce à vivre</option>
        <option name='Cagibi'>Cagibi</option>
    </select></p>
    <p><input type='submit' value='Valider'/>
    <input type='reset' value='Annuler' /></p>

</form>";
    $contenu .= "</div>";

    $jvscrpt = require('Vue/onglets.php');
    include 'Gabarit.php';

?>