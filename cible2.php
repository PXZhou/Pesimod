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
    else if (!empty($_POST['Ajouter'])){
        $id = $_POST['id_maison'];
        $etage = $_POST['etage'];
        $nom = $_POST['nom'];
        $nvid = $bdd->exec("Select max(id_piece)");
        $nvid = $nvid+1;
        echo $nvid;
        $req = $bdd->exec("INSERT INTO piece(id_piece,nom,etage,id_maison)
    VALUES ('$nvid',".$nom.",'$etage','$id')");

    }
    else if (!empty($_POST['Ajouter_maison'])){
        $adress = $_POST['adress'];
        $city  = $_POST['nom_city'];
        $poste = $_POST['code_postal'];
        $id = $_POST['id_user'];
        $nom = $bdd->exec("SELECT Nom from utilisateur where id ='.$id.'");
        $nvid = ($bdd->exec("SELECT MAX(id) form maison")) + 1;
        $req =$bdd->exec("INSERT INTO maison(id,nom,adresse,code_postal,ville,id_utilisateur) values ('$nvid','.$nom.','.$adress.',
'.$poste.','.$city.','.$id.')" );
    }

    /** SELECT concert.date,Ville.nom as Ville, Salle.nom as salle From Groupe Join concert on Groupe.id = Concert groupe_id
     Join salle on concert.salle= Salle.id Join ville on salle.ville = ville.id where groupe.nom ='PNL' order by concert.date asc**/
header('Location: test divers.php');
exit();

