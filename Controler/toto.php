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

    function titi($id_utilisateur,$bdd){
        $tab=array();
        $req = $bdd->query("SELECT nom, num_serie FROM capteur WHERE id_utilisateur = '$id_utilisateur'");
        while ($donnes = $req->fetch()){
            $tab[] = $donnes['nom'];
        }
        $long = count($tab);
        for ($i=1; $i < $long; $i++){
            $tab[$i] = array($donnes['nom'],$donnes['num_serie']);
        }
        return $tab;
    }
    $ongle = titi(1,$bdd);
    $long = count($ongle);
    for ($i=1; $i < $long; $i++){
        for ($j=1; $j < 2; $j++){
            echo($ongle[$i][$j]);
        }
    }