<?php
require("Connexion.php");

// fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
function mdp($db,$identifiant){
    $reponse = $db->query('SELECT Email, Mot de passe FROM utilisateur WHERE Email="'.$identifiant.'"');
    return $reponse;
}

// fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
function utilisateurs($db){
    $reponse = $db->query('SELECT Email FROM utilisateur');
    return $reponse;
}
?>