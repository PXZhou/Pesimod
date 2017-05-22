<?php
$title = ob_get_clean() ;
$contenu = ob_get_clean();
$tete = ob_get_clean();
$title = "Connexion" ;
$contenu = formulaire_co().$erreur;
$tete = "Connexion";
$dbouton1 = dbouton1("Se connecter");
$dbouton2 = dbouton2("S'inscrire");

    include'Gabarit.php';
$jvscript = "";
?>