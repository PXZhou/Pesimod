<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=pesimod;charset=utf8', 'root', '');
    }

    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    if (!empty($_POST['Ajout_piece'])){
        $id_user = $_POST['id_user'];
        $id_maison = $_POST['id_maison'];
        $etage = $_POST['etage'];
        $nom = $_POST['nom'];
        $ajout = $bdd->prepare('INSERT INTO piece (nom, etage, id_maison, id_utilisateur) VALUES (:nom, :etage, :id_maison, :id_utilisateur)');

        $ajout -> execute(array(
                'nom' => $nom,
                'etage' => $etage,
                'id_maison' => $id_maison,
                'id_utilisateur' => $id_user,)
        );
    }
    if (!empty($_POST['Ajout_maison'])){
        $id_user = $_POST['id_user'];
        $address = $_POST['address'];
        $etage = $_POST['etage'];
        $code_postal = $_POST['code_postal'];
        $city = $_POST['name_city'];
        $reponse = $bdd->query("SELECT Nom FROM utilisateur WHERE id = '$id_user'");
        while ($donnees = $reponse->fetch()){
            $nom = $donnees['Nom'];
        }
        $ajout = $bdd->prepare('INSERT INTO maison (nom, adresse, code_postal, ville,etage,id_utilisateur)
 VALUES (:nom, :adresse, :code_postal,:ville,:etage, :id_utilisateur)');

        $ajout -> execute(array(
                'nom' => $nom,
                'adresse' => $address,
                'code_postal' => $code_postal,
                'ville' => $city,
                'etage' => $etage,
                'id_utilisateur'=>$id_user,)
        );
    }
    if (!empty($_POST['Ajout_capteur'])){
        $id_catégorie = $_POST['modifcation_nombre_capteur']+1;

        $id_piece = $_POST['id_piece'];

        $id_user = $_POST['id_user'];

        $nom = $_POST['name'];


        for ($i = 0;$i<=$_POST['nombre'];$i++) {
            $ajout = $bdd->prepare('INSERT INTO capteur(num_serie, nom, id_piece, id_categorie, id_utilisateur)
     VALUES (:num_serie, :nom, :id_piece,:id_categorie,:id_utilisateur)');

            $ajout->execute(array(
                    'num_serie' => "",
                    'nom' => $nom,
                    'id_piece' => $id_piece,
                    'id_categorie' => $id_catégorie,
                    'id_utilisateur' => $id_user,)
            );
        }
    }
     if (!empty($_POST['Supprimer_maison'])) {
        $id_maison = $_POST['id_maison'];
        $req = $bdd->exec("DELETE FROM maison WHERE id='$id_maison'");
        $req = $bdd->exec("DELETE FROM piece where id_maison = '$id_maison'");
    }
    if (!empty($_POST['Maison'])) {
        $nom = $_POST['nom'];
        $reponse = $bdd->query("SELECT id FROM maison WHERE id = '$id_user'");
        while ($donnees = $reponse->fetch()){
            $id_maison = $donnees['id'];
        }
    }

