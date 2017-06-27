<?php
    session_start();

    $email = "marie.poppins@gmail.com";
    $email1 = "jacque.cartier@gmail.com";
    ?>
    <link rel="stylesheet" type="text/css" href="Style_Editeur.css"/>
    <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=pesimod;charset=utf8', 'root', '');
    }

    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    function get_etage($id_maison,$bdd){
        $reponse = $bdd->query("SELECT etage FROM maison WHERE id = '$id_maison'");
        while ($donnees = $reponse->fetch()){
            $etage = $donnees['etage'];
        }
        return $etage;
    }
    function get_id_user($email,$bdd){
        $reponse = $bdd->query("SELECT id FROM utilisateur WHERE Email = '$email'");
        while ($donnees = $reponse->fetch()){
            $etage = $donnees['id'];
        }
        return $etage;
    }
    function get_id_maison($email,$bdd){
        $id = get_id_user($email,$bdd);
        $reponse = $bdd->query("SELECT id FROM maison WHERE id = '$id'");
        while ($donnees = $reponse->fetch()){
            $idmaison = $donnees['id'];
        }
        return $idmaison;
    }
    function ajout_piece($id_maison,$bdd,$id_user)
{?>
    <form action="Editeur_cible.php" method="post" id="mini_corps">
        <h2>Ajout d'une nouvelle piece</h2>
        <input type="hidden" name="id_user" value="<?php echo $id_user ?>"/>
        <input type="hidden" name="id_maison" value="<?php echo $id_maison?>"/>
        <p>Selectionnez l'etage de la pièce ajoutée : </p>
        <select name ="etage" />
        <?php for($i = 0;$i<get_etage($id_maison,$bdd);$i++){?>
            <option value=" <?php echo $i?>"  ><?php echo $i?></option>
        <?php }?>
        </select></br>
        <p>Entrez le nom de votre nouvelle pièce</p>
        <input type="text" name="nom">
        <input type="submit" value="Ajouter" name="Ajout_piece">
    </form>
<?php }

    function editeur($bdd,$email){
        $reponse = $bdd->query("SELECT nom_categorie FROM categorie_capteurs ");
        while ($donnees = $reponse->fetch()) {
            $categorie[] = $donnees['nom_categorie'];
        }
        $nbetage = get_etage(get_id_user($email,$bdd),$bdd);
        $id_user = get_id_user($email,$bdd);
        $id_maison = get_id_maison($email,$bdd);
        for ($i = 0;$i<=count($nbetage);$i++) {
            $reponse = $bdd->query("SELECT nom,id FROM piece 
where etage= '$i' and id_utilisateur = '$id_user' and id_maison='$id_maison'");
            while ($donnees = $reponse->fetch()) {
                $nom[] = $donnees['nom'];
                $id_piece[]  = $donnees['id'];
            }
            ?>
            <form action="Editeur_cible.php" method="post" id="mini_corps">
                <input type="hidden" value="<?php echo $id_user?>" name="id_user">
                <h2>Ajouter des capteurs dans l'étage <?php echo $i?></h2>
                <p>Entrez le nom du capteur :</p>
                <input type="text" name="name"></br>
                <select name="nom_piece"/>
                <?php for ($j = 0; $j < count($nom); $j++) { ?>
                    <option value=" <?php echo $nom[$j] ?>"><?php echo $nom[$j] ?></option>
                    <input type="hidden" value="<?php echo $id_piece[$j]?>" name="id_piece">

                <?php } ?>
                </select>
                <select name="modifcation_nombre_capteur"/>
                <?php for ($j = 0; $j < count($categorie); $j++) { ?>
                    <option value=" <?php echo $j ?>"><?php echo $categorie[$j] ?></option>
                <?php } ?>
                <p><input type="number" name="nombre" min="0" max="100"
                          value="0"></p>
                </select>
                <input type="submit" value="Ajouter" name="Ajout_capteur"/>
            </form>
            <?php
            $nom = array();
            $id_piece = array();
        }
    }
    function Ajout_maison($id_user)

{?>
    <form action="Editeur_cible.php" method="post" id="mini_corps">

        <input type="hidden"  value="<?php echo $id_user?>" name="id_user">
        <h2>Ajout d'un nouveau bien</h2>
        <p>Quelle est l'adresse du bien ?</p>
        <input type="text" name="address">
        <p>Quelle est le code postal ?</p>
        <input type="text" name="code_postal">
        <p>Quelle est le nom de la ville ?</p>
        <input type="text" name="name_city">
        <p>Combien a-t-il d'étage</p>
        <input type="text" name="etage"></br>
        <input type="submit" value="Ajouter" name="Ajout_maison"?>
    </form>
<?php }

    function supprimer_maison($id_user,$bdd)
    {

        $adress = array();
        $zipcode = array();
        $ville = array();
        $id = array();
        $reponse = $bdd->query("SELECT * FROM maison WHERE id_utilisateur = '$id_user'");
        while ($donnees = $reponse->fetch()) {
            $adress[] = $donnees['adresse'];
            $zipcode[] = $donnees['code_postal'];
            $ville[] = $donnees['ville'];
            $id[] = $donnees['id'];

        }

        for ($i = 0;$i<count($adress);$i++) {?>
            <form action="Editeur_cible.php" method="post" id="mini_corps">
            <p>Le bien en question : <?php echo $adress[$i]?>,<?php echo $zipcode[$i]?>,<?php echo $ville[$i]?></p>
            <input type="hidden"  value="<?php echo $id[$i]?>" name="id_maison">
            <input type="submit" value="Supprimer" name="Supprimer_maison"?>
        <?php }
    }

    function affichage_maison($id_user,$bdd){


        $reponse = $bdd->query("SELECT * FROM maison WHERE id_utilisateur = '$id_user'");
        while ($donnees = $reponse->fetch()) {
            $adress[] = $donnees['adresse'];
            $zipcode[] = $donnees['code_postal'];
            $ville[] = $donnees['ville'];
            $id[] = $donnees['id'];
            $nom[] =$donnees['nom'];
        }?>
        <form action="Editeur_cible.php" method="post" id="mini_corps">
            <select name="nom"/>
            <?php for($i = 0;$i<count($nom);$i++){?>
                <option value=" <?php echo $i?>"  ><?php echo $i?></option>
            <?php }?>
            </select>
            <input type="submit" value="Mise à jour" name="Maison">
        </form>
    <?php }

        function supprimer_piece($id_maison,$bdd,$id_user)
    {
        $nbetage = get_etage($id_maison,$bdd);

        for ($i = 0;$i<=count($nbetage);$i++) {
            $reponse = $bdd->query("SELECT nom,id FROM piece 
where etage= '$i' and id_utilisateur = '$id_user' and id_maison='$id_maison'");
            while ($donnees = $reponse->fetch()) {
                $nom[] = $donnees['nom'];
                $id_piece[]  = $donnees['id'];
            }?>

            <form action="Editeur_cible.php" method="post" id="mini_corps">
                <input type="hidden" value="<?php echo $id_user?>" name="id_user">
                <h2>Ajouter des capteurs dans l'étage <?php echo $i?></h2>
                <p>Entrez le nom du capteur :</p>
                <input type="text" name="name"></br>
                <select name="nom_piece"/>
                <?php for ($j = 0; $j < count($nom); $j++) { ?>
                    <option value=" <?php echo $nom[$j] ?>"><?php echo $nom[$j] ?></option>
                    <input type="hidden" value="<?php echo $id_piece[$j]?>" name="id_piece">

                <?php } ?>
                </select>
            </form>
            <?php
            $nom = array();
            $id_piece = array();
        }
    }

    ajout_piece(get_id_maison($email,$bdd),$bdd,get_id_user($email,$bdd));
