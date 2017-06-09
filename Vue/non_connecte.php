<?php
$title = ob_get_clean() ;
$contenu = ob_get_clean();
$tete = ob_get_clean();
$title = "Connexion" ;
$contenu = "<div id='conteneur'>";
$contenu .= formulaire_co().$erreur;
$contenu .= formulaire_ins();
$contenu .= "</div>";
$tete = "Connexion";

    include'Gabarit.php';
$jvscript = "";
?>