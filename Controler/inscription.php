<?php

if(isset($_GET['cible']) && $_GET['cible']=="verif_ins"){// l'utilisateur a cliqué sur valider
    if(!empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['Email']) && !empty($_POST['Mdp']) && !empty($_POST['Mdp2'])) {
        include 'Modele/PDO.php';

        $Mdp = (htmlspecialchars($_POST['Mdp']));
        $Mdp2 = (htmlspecialchars($_POST['Mdp2']));

        if ($Mdp === $Mdp2) {
            $Nom = (htmlspecialchars($_POST['Nom']));
            $Prenom = (htmlspecialchars($_POST['Prenom']));
            $Email = (htmlspecialchars($_POST['Email']));

            $verif = $db->query('SELECT Email FROM utilisateur WHERE Email="'.$Email.'"');

            if ($verif->rowcount()==0){
                $Mdp = sha1($Mdp);

                inscription($db, $Nom, $Prenom, $Email, $Mdp);
                $info_ins = "Inscription Validée.";
                include "Vue/non_connecte.php";
            }

            else {
                $info_ins = "Cet email existe déjà.";
                include "Vue/non_connecte.php";
            }




        } else {
            $info_ins = "Veuillez recommencer. Les mots de passes ne correspondent pas.";
            include "Vue/non_connecte.php";

        }
    }
    else {
        $erreur = "Veuillez remplir tous les champs.";
        include "Vue/non_connecte.php";
    }

}



?>