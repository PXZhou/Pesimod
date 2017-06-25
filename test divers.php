    <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=beta_client;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    function editeur($id_piece,$bdd){
        $reponse = $bdd->query("SELECT nom_categorie FROM categorie_capteurs ");
        while ($donnees = $reponse->fetch()) {
            $categorie[] = $donnees['nom_categorie'];
        }
        ?>
        <form action="cible2.php" method="post">
            <input type="hidden" value="<?php echo $id_piece?>" name="id_piece">
            <p>Veulliez entrer votre nouveau type de catégorie :</p>
            <input type="text" name="type_catégorie" />
            <p>Le type d'unité du capteur</p>
            <input type="text" name="unite_cap" values="absent"/></br>
            <p>Ajouter des capteurs</p>
            <select name ="modifcation_nombre_capteur" />
            <?php for($i = 0;$i<count($categorie);$i++){?>
                <option value=" <?php echo $i?>"  ><?php echo $categorie[$i]?></option>
            <?php }?>
            <p><input type="number" name="nombre" min="0" max="100"
                      value="0"></p>
            </select>
            <input type="submit" value="Valider" name="Valider" />
        </form>
        <?php
    }?>

    <?php function ajout_piece($id_maison,$etage)
    {?>
        <form action="cible2.php" method="post">
            <h2>Ajout d'une nouvelle piece</h2>
            <input type="hidden" name="id_maison" value="<?php echo $id_maison?>"/>
            <input type="hidden" name="etage" value="<?php echo $etage?>"/>
            <p>Entrez le nom de votre nouvelle pièce</p>
            <input type="text" name="nom">
            <input type="submit" value="Ajouter" name="Ajouter">
        </form>
    <?php }?>

    <?php function Ajout_maison($id_user)
    {?>
        <form action="cible2.php" method="post">
            <input type="hidden" name="id_user" values="<?php echo $id_user?>">
            <h2>Ajout d'un nouveau bien</h2>
            <p>Quelle est l'adresse du bien ?</p>
            <input type="text" name="adress">
            <p>Quelle est le code postal ?</p>
            <input type="text" name="code_postal">
            <p>Quelle est le nom de la ville ?</p>
            <input type="text" name="name_city">
            <input type="submit" value="Ajouter" name="Ajouter_maison"?>
        </form>
    <?php }?>

    <?php function supprimer_capteur($id_piece,$id_maison){?>
        <form action="cible2.php" method="post">
            <input type ="hidden" name="id_piece" value="<?php echo $id_piece?>">
            <input type ="hidden" name="id_maison" value="<?php echo $id_maison?>">
            <input type="submit" value="Supprimer">
        </form>
    <?php }?>

    <?php function get_etage($id_utilisateur,$bdd){
        $reponse = $bdd->exec("SELECT etage FROM maison WHERE utilisateur.id = '$id_utilisateur'");
        return $reponse;
    }?>

    <?php function get_id($email,$bdd){
        $reponse = $bdd->exec("SELECT id FROM utilisateur WHERE utilisateur.Email = '$email'");
        return $reponse;
    }?>

    <?php function editeur_effecteur($id_maison,$id_piece,$bdd){
        ?>
        <form>
            <input type="hidden" value="<?php echo $id_piece?>" name="id_piece">
            <input type="hidden" value="<?php echo $id_maison?>" name="id_maison">
            <p>Entrez le numéro de série de effecteur :</p>
            <input type="text" name="serie_effecteur" values="absent"/>
            <p>Entrez le type de l'effecteur</p>
            <input type="text" name="type_effecteur" values="absent"/></br>
            <p>Est-il allumé ou éteint</p>
            
        </form>
    <?php
    }?>
<html>
<body>
    <?php echo ajout_piece(0,1)?>
</body>
</html>