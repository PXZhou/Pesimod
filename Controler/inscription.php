<?php

if(isset($_GET['cible']) &&  $_GET['cible']=="verif"){
    if(!empty($_POST['Email']) && !empty($_POST['Mdp']) && !empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['Mdp2'])){
        include 'Modele/PDO.php';

        $Mdp = (htmlspecialchars($_POST['Mdp']));
        $Mdp2 = (htmlspecialchars($_POST['Mdp2']));

        if($Mdp === $Mdp2)
            {
            $Nom = (htmlspecialchars($_POST['Nom']));
            $Prenom = (htmlspecialchars($_POST['Prenom']));
            $Email = (htmlspecialchars($_POST['Email']));

            $Mdp = sha1($Mdp);

            inscription($db, $Nom, $Prenom, $Email, $Mdp);

            echo "inscription terminée";

            }

        else
            {
            echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
            include'Vue/ins_non_connecte.php';
            }}
    }
else
    {
        include'Vue/ins_non_connecte.php';
}
?>