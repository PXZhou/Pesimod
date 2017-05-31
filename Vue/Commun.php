<?php

// Genere le formulaire de connexion
function formulaire_co(){
    ob_start();
    ?>
    <fieldset>
        <form method="POST" action="index.php?cible=verif_co">
            Identifiant
            <br/>
            <input type="text" name="Email"/>
            <br/>
            Mot de passe
            <br/>
            <input type="password" name="Mdp"/>
            <br/>
            <input type='submit'/>
        </form>
    </fieldset>
    <?php
    $formulaire_co = ob_get_clean();
    return $formulaire_co;
}



// Genere le formulaire d'inscription
function formulaire_ins(){
    ob_start();
    ?>
    <fieldset>
        <form method="POST" action="index.php?cible=verif_ins">
            Nom
            <br/>
            <input type="text" name="nom"/>
            <br/>
            Prenom
            <br/>
            <input type="text" name="prenom"/>
            <br/>
            Email
            <br/>
            <input type="text" name="Email"/>
            <br/>
            Mot de passe
            <br/>
            <input type="text" name="mdp"/>
            <br/>

            <input type='submit'/>
        </form>
    </fieldset>
    <?php
    $formulaire_ins = ob_get_clean();
    return $formulaire_ins;

}
function dbouton1 ($nom){
ob_start();
    ?>
    <li class="bouton_droite"><a href="index.php?cible=bouton1"><?php echo($nom); ?></a></li>
    <?php
$dboutton1 = ob_get_clean();
return $dboutton1;

}
function dbouton2 ($nom){
    ob_start();
    ?>
    <li class="bouton_droite"><a href="index.php?cible=bouton2"><?php echo($nom); ?></a></li>
    <?php
    $dboutton2 = ob_get_clean();
    return $dboutton2;

}
