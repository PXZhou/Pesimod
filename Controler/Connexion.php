<?php

if(isset($_GET['cible']) && $_GET['cible']=="verif"){ //Validation du formulaire
    if(!empty($_POST['identifiant']) && !empty($_POST['mdp'])) { // L'utilisateur a rempli tous les champs du formulaire
        include("Modele/utilisateurs.php");
        $reponse = mdp($db,$_POST['identifiant']);
        if($reponse->rowcount()==0) {  // L'utilisateur n'a pas été trouvé dans la base de données
            $erreur = "Utilisateur inconnu";
            include("Vue/connexion_erreur.php");
        }
        else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                if(md5($_POST['mdp'])!=$ligne['mdp']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    include("Vue/connexion_erreur.php");
                } else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["userID"] = $ligne['id'];
                    include("Vue/accueil_co.php");

                }
        }
    }
}
else {
    include'Vue/non_connecte.php';
}

?>