<?php
$title = ob_get_clean() ;
$contenu = ob_get_clean();
$tete = ob_get_clean();
$title = "Inscription" ;
$contenu = formulaire_ins();
$tete = "Inscription";

include "Gabarit.php";
$jvscript = "";
?>