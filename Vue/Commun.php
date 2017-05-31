<?php
    $tete = "Connexion";
// Genere le formulaire de connexion

function formulaire_co(){
    ob_start();
    ?>
    <fieldset>
        <form method="POST" action="index.php?cible=verif_co">
            <div id="connex">
            <h2 id="titrcon">Connexion</h2>
            Identifiant
            <br/>
            <input type="text" name="Email"/>
            <br/>
            Mot de passe
            <br/>
            <input type="password" name="Mdp"/>
            <br/>
            <input type='submit' value="Valider"/>
            </div>
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
            <div id="inscrip">
            <h2 id="titrins">Inscription</h2>
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
            Confirmation Mot de passe
            <br/>
            <input type="text" name="mdp"/>

            <input type='submit' value="Valider"/>
            </div>
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
