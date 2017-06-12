<?php


    try{
        $bdd = new PDO('mysql:host=localhost;dbname=pesimod;charset=utf8','root','');
    }
    catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

    function tata($id_utilisateur, $id_maison,$bdd){
        $tab=array();
        $req = $bdd->query("SELECT nom FROM piece WHERE id_maison ='$id_maison' AND id_utilisateur = '$id_utilisateur'");
        while ($donnes = $req->fetch()){
            $tab[] = $donnes['nom'];
        }
        return $tab;
    }

    /*function titi($id_utilisateur, $id_maison, $bdd){
        $tab2 = array();
        $req = $bdd ->query("SELECT nom");
    }*/