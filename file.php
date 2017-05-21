<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleB.css"/>
        <title>Editeur</title>
    </head>
    <body>
    <?php
    function Case_Nombre_capteur($numero){

        $premons = array ('choix0','choix1', 'choix2', 'choix3', 'choix4', 'choix5','choix6','choix7','choix8','choix9','choix10');
        $capteur = array ('Capteur de température','Capteur de présence','Détecteur de fumée','Nombre de caméra',"Nombre d'humidité","Détecteur de fumée");
        $i = 0;
        echo $capteur[$numero];
        echo "  " ;
        echo"<select name=choix>";
        while($i<11){
            echo"<option value=$premons[i]>$i</option>";
            $i++;
        }
        echo"</select>";
    }
    ?>

    <section>
        <from action="cible.php" method="post" id="mini_corpsb">
            <h2>Modification du nombre d'étage</h2></br></br>
            <p>Quelle est l'étage a modifiée ? : </p>
            <p><input type="text" name="modification_étage" /></p>
            <p id="de_coté"><input type="submit" value="Valider"/></p>
        </from>
        <form action="cible.php" method="post" id="mini_corps">
            <h2>Modification/Ajout d'une pièce</h2></br></br>
            <p>Quelle est l'étage de la pièce a modifiée ? : </p>
            <p><input type="text" name="numéro_étage" /></p>
            <p>Quelle est le nom de la pièce ? : </p>
            <p><input type="text" name="nom_pièce" /></p>
            <p>Modifiez le nombre de capteur à l'aide du formulaire suivant :</p>
            <div>
                <ul>
                    <li><?php Case_Nombre_capteur(0);?></li>
                    <li><?php Case_Nombre_capteur(1);?></li>
                    <li><?php Case_Nombre_capteur(2);?></li>
                    <li><?php Case_Nombre_capteur(3);?></li>
                    <li><?php Case_Nombre_capteur(4);?></li>
                    <li><?php Case_Nombre_capteur(5);?></li>
                </ul>
            </div>
            <p id="de_coté"><input type="submit" value="Valider"/></p>
        </form>
    </section>

    </body>
</html>