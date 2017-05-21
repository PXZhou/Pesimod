<?php
    ob_start();

    $contenu = formulaire_co();

    $menu = ob_get_clean();
    $contenu = "<h2>Erreur dans le formulaire de connexion</h2>".$erreur;

    include 'gabarit.php';
?>