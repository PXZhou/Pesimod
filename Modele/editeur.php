<?php
    function get_id($nom,$bdd){
        $req = $bdd->exec("SELECT id FROM '.$nom.'");
        return $req;
    }

    function get_info($id,$bdd){
        $req = $bdd->exec("SELECT maison.etage,piece.id FROM utilisateur JOIN maison on utilisateur.id = maison.id_utilisateur 
JOIN piece on maison.id = piece.id_maison where utilisateur.id = '.$id.'");
        return $req;
    }
