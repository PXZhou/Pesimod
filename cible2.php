<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=beta_client;charset=utf8', 'root', '');
    }

    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    if (!empty($_POST['Valider'])){
        $id_piece = $_POST['id_piece'];
        $ajout = $_POST['modifcation_nombre_capteur'] + 1;
        $reponse = $bdd->query("SELECT * FROM categorie_capteurs WHERE id_categorie_capteur = '$ajout'");;
        while ($donnees = $reponse->fetch()) {
            $nom = $donnees['nom_categorie'];
        }
        for($i=0;$i<$_POST['nombre'];$i++){
            $req = $bdd->exec("INSERT INTO capteur(num_serie, nom, id_piece, id_categorie)
    VALUES ('','$nom',".$id_piece.",".$ajout.")");
        }
    }
    if (!empty($_POST['Ajouter'])){
        $id = $_POST['id_maison'];
        $etage = $_POST['etage'];
        $nom = $_POST['nom'];
        $req = $bdd->exec("INSERT INTO piece(id_piece,nom,etage,id_maison)
    VALUES ('.$nvid.','$nom','.$etage.','.$id.')");

    }
    if (!empty($_POST['ajout'])){
        $adress = $_POST['adress'];
        $city  = $_POST['name_city'];
        $poste = $_POST['code_postal'];
        $id = $_POST['id_user'];
        echo $id;
        $req = $bdd->query("SELECT Nom from utilisateur where id = '.$id.'");
        while ($donnees = $req->fetchAll()){
            $lastname = $donnees['Nom'];
            echo $lastname;
        }
        $req =$bdd->exec("INSERT INTO maison(nom,adresse,code_postal,ville,id_utilisateur) values ('$lastname','$adress',
'$poste','$city','$id')" );
    }

    /** SELECT concert.date,Ville.nom as Ville, Salle.nom as salle From Groupe Join concert on Groupe.id = Concert groupe_id
     Join salle on concert.salle= Salle.id Join ville on salle.ville = ville.id where groupe.nom ='PNL' order by concert.date asc**/


