<?php


if(!empty($_POST['Email']) && !empty($_POST['Mdp'])){
    include("Modele/PDO.php");

    $reponse = mdp($db,$_POST['Email']);

    if($reponse->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
        $erreur = "Utilisateur inconnu";
        include("Vue/non_connecte.php");

    } else { // utilisateur trouvé dans la base de données
        $ligne = $reponse->fetch();
        if($_POST['Mdp']!=$ligne['Mdp']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
            $erreur = "Mot de passe incorrect";
            include("Vue/non_connecte.php");
        } else { // mot de passe correct, on affiche la page d'accueil
            $_SESSION["userID"] = $ligne['id'];
            include("Vue/accueil_co.php");
        }
    }
}
else {
    $erreur = "veuillez remplir tous les champs";
    include('Vue/non_connecte.php');
}

//else{}
