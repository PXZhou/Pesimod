<?php
$title = ob_get_clean() ;
$contenu = ob_get_clean();
$tete = ob_get_clean();
$title = "Connexion" ;
$contenu = formulaire_co();
$tete = "Connexion";

    include'Gabarit.php';
$jvscript = "";
?>