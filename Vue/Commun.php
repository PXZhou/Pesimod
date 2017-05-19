<?php

// Genere le formulaire de connexion
function formulaire_co(){
    ob_start();
    ?>
    <fieldset>
        <form method="POST" action="index.php?cible=verif">
            Identifiant
            <br/>
            <input type="text" name="identifiant"/>
            <br/>
            Mot de passe
            <br/>
            <input type="text" name="mdp"/>
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
        <form method="POST" action="index.php?cible=verif">
            Identifiant
            <br/>
            <input type="text" name="identifiant"/>
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


