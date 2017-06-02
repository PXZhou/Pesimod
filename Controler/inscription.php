<?php

if(isset($_GET['cible']) &&  $_GET['cible']=="verif"){
    //if(!empty()
    include 'Modele/PDO.php';

    $Mdp = (htmlspecialchars($_POST['Mdp']));
    $Mdp2 = (htmlspecialchars($_POST['Mdp2']));

    if($Mdp == $Mdp2)
        {
        $Nom = (htmlspecialchars($_POST['Nom']));
        $Prenom = (htmlspecialchars($_POST['Prenom']));
        $Email = (htmlspecialchars($_POST['Email']));

        $Mdp = sha1($Mdp);

        inscription($db, $Nom, $Prenom, $Email, $Mdp);
        }

    else
        {
        echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
        include'Vue/ins_non_connecte.php';
        }

else
    {
        include'Vue/ins_non_connecte.php';
    }
}
?>