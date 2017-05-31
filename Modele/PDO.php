<?php

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function mdp($db,$identifiant){
        $reponse = $db->query('SELECT id, Mdp FROM utilisateur WHERE Email="'.$identifiant.'"');
        return $reponse;
    }

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function utilisateurs($db){
        $reponse = $db->query('SELECT nom FROM utilisateur');
        return $reponse;
    }
// fonction qui va ajouter les utilisateur lors de l'incription
    function inscription($db){
        $ajout = $db->prepare('INSERT INTO utlisateur(Nom, Prenom, Email, Mdp) VALUES (:Nom, :Prenom, :Email, :Mdp');
        $ajout -> execute(array(
                'Nom' => $Nom,
                'Prenom' => $Prenom,
                'Email' => $Email,
                'Mdp' => $Mdp
        ));
    }
?>