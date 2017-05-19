<?php
$title = ob_get_clean() ;
$contenu = ob_get_clean();
$tete = ob_get_clean();
$title = "Connexion" ;
$contenu = formulaire_ins();
$tete = "Connexion";

include "Gabarit.php";
?>