
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style_editeur.css"/>
</head>
<body>

    <?php function Case_Nombre_capteurb($numero,$nom_piece){
        $premons = array ('choix0','choix1', 'choix2', 'choix3', 'choix4', 'choix5');
        $capteur = array ('Capteur de température','Capteur de présence','Détecteur de fumée',
            'Nombre de caméra',"Capteur d'humidité",'Capteur de Luminosité');
        ?>
        <p><?php echo $capteur[$numero]?></p>  <input type="number" name="<?php echo $premons[$numero]?>" min="0" max="100"
               value="<?php echo get_nombre_capteur($numero,$nom_piece)?>">
    <?php
    }?>
    <?php function Case_Nombre_capteura($numero){
        $premons = array ('choix0','choix1', 'choix2', 'choix3', 'choix4', 'choix5');
        $capteur = array ('Capteur de température','Capteur de présence','Détecteur de fumée',
            'Nombre de caméra',"Capteur d'humidité",'Capteur de Luminosité');
        ?>
        <p><?php echo $capteur[$numero]?></p>  <input type="number" name="<?php echo $premons[$numero]?>" min="0" max="100"
                                                      value="0">
        <?php
    }?>

    <?php
    function cas($nom_capteur){
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=espace_clientb;charset=utf8', 'root', '');
        }

        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        $reponse = $bdd->query("SELECT * FROM piece WHERE Nom= '$nom_capteur'");
        while ($donnees = $reponse->fetch()){
            ?>
        <form action="cible.php" method="post" id="mini_corps">
            <input type="hidden" value="<?php echo $donnees['Nom']?> " name="old_name">
            <h2> <?php echo $donnees['Nom']?> </h2></br></br>
            <p>Voulez vous changer le nom de la pièce ? : </p>
            <p><input type="text" name="nom_pièce" value= "<?php echo $donnees['Nom']?>"></p>
            <p>Modifiez le nombre de capteur à l'aide du formulaire suivant :</p>
            <div>
                <ul>
                    <li> <?php Case_Nombre_capteurb(0,$donnees['Nom'])?></li>
                    <li> <?php Case_Nombre_capteurb(1,$donnees['Nom'])?></li>
                    <li> <?php Case_Nombre_capteurb(2,$donnees['Nom'])?></li>
                    <li> <?php Case_Nombre_capteurb(3,$donnees['Nom'])?></li>
                    <li> <?php Case_Nombre_capteurb(4,$donnees['Nom'])?></li>
                    <li> <?php Case_Nombre_capteurb(5,$donnees['Nom'])?></li>

                </ul>
            </div>
            <p id="droite"><input type="submit" value="Valider" name="Valider"/></p>
            <p id="gauche"><input type="submit" value="Supprimer"></p>

        </form>
        <?php
        }

        $reponse->closeCursor(); // Termine le traitement de la requête


    }?>
    <?php function get_etage($Nom){
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=espace_client;charset=utf8', 'root', '');
        }

        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        $reponse = $bdd->query("SELECT Etage FROM maison WHERE Nom= '$Nom'");
        while ($donnees = $reponse->fetch()){
            $Etage = $donnees['Etage'];
        }

        $reponse->closeCursor(); // Termine le traitement de la requête
        return $Etage;
    }?>
    <?php function get_nombre_capteur($numero,$nom_piece)
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=espace_clientb;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $capteur = array('Nombre_temp','Nombre_presence','Nombre_fumée','Nombre_ca',"Nombre_ch","Nombre_lum");
        $reponse = $bdd->query("SELECT $capteur[$numero] FROM piece  WHERE Nom ='$nom_piece'");
        while ($donnees = $reponse->fetch()) {
            $value = $donnees[$capteur[$numero]];
        }
        $reponse->closeCursor();
        return $value;
    }?>
    <?php function affichage_selon_etage($numero){
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=espace_clientb;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $reponse = $bdd->query("SELECT * FROM piece");
        while ($donnees = $reponse->fetch()) {
            if ($donnees['Etage'] == $numero){
                cas($donnees['Nom']);
                }
        }
        $reponse->closeCursor();
    }?>
    <?php function Ajouter($Etage){
        ?>
    <form action="cible.php" method="post" id="mini_corps">
        <input type="hidden" value="<?php echo $Etage?> " name="Etage">
        <h2> Ajout d'une pièce </h2></br></br>
        <p>Veuillez vous taper le nom de la pièce ? : </p>
        <p><input type="text" name="nom_pièce"></p>
        <!--<p>Veuillez entrer le m² de la pièce</p>
        <input type="number" name="Superficie" min="1" max="100"
               value="1">
        <p>Veuillez la fonction de la pièce</p>-->
        <p>Modifiez le nombre de capteur à l'aide du formulaire suivant :</p>
        <div>
            <ul>
                <li> <?php Case_Nombre_capteura(0)?></li>
                <li> <?php Case_Nombre_capteura(1)?></li>
                <li> <?php Case_Nombre_capteura(2)?></li>
                <li> <?php Case_Nombre_capteura(3)?></li>
                <li> <?php Case_Nombre_capteura(4)?></li>
                <li> <?php Case_Nombre_capteura(5)?></li>
            </ul>
        </div>
        <p id="droite"><input type="submit" value="Ajouter" name="Ajouter"/></p>


    </form><?php
    }?>
    <?php function Modification($name){
    ?>
    <form action="cible.php" method="post" id="mini_corps">
        <input type="hidden" value="<?php echo $name?> " name="client">
        <h2> Modification du nombre étage</h2></br></br>
        <p>Veuillez vous entrer le nombre d'Etages ? : </p>
        <input type="number" name="Modif_etage" min="0" max="100"
               value="<?php echo get_etage($name)?>">
        <p id="droite"><input type="submit" value="Modification" name="Modification"/></p>
    </form>
    <?php }?>
    <?php affichage_selon_etage(0)?>
    <?php Ajouter(0)?>

</body>
</html>
