<?php

<link rel="stylesheet" type="text/css" href="FAQ.css"/>;
    $contenu .= "<ul id="Foire à questions">";
    $contenu .= "<li id="q1"> "<a href="#a1">"Que puis-je contrôler avec Pesimod ?"</a></li>";
    $contenu .= "<li id='q2'>" "<a href="#a2">"Je ne peux pas ajouter de nouvelle pièce, pourquoi ?"</a></li>";
    $contenu .= "<li id="q3">" "<a href="#a3">"Je ne peux pas ajouter de nouveau capteur dans une pièce, pourquoi ?"</a></li>";
    $contenu .= "<li id="q4"><a href="#a4">"Je ne peux pas ajouter plusieurs maisons, pourquoi ?"/a></li>";
    $contenu .=  <li id="q5"><a href="#a5">"Je ne trouve pas trouver la réponse à ma question, comment régler mon problème ?"</a></li>;

    $contenu .= <div id="a1">;
    $contenu .= <h2>"Que puis-je contrôler avec Pesimod ?"</h2>;
    $contenu .= <p>"Vous pouvez contrôler les différents capteurs de votre maison, via votre interface de Pesimod."</p>;
</div>;
<div id="a2">;
    <h2>"Je ne peux pas ajouter de nouvelle pièce, pourquoi ?"</h2>;
    <p>"Il faut cliquer sur le gestionnaire de pièces avant de pouvoir acceder à la fonctionnalité ajout de pièces"</p>;
</div>;

<div id="a3">;
    <h2>"Je ne peux pas ajouter de nouveau capteur dans une pièce, pourquoi ?"</h2>;
    <p>"Vous n'avez pas le type d'abonnement qui vous permet d'ajouter plus de capteurs, il faut souscrire à l'offre Premium"</p>;
</div>;

<div id="a4">;
    <h2>"Je ne peux pas ajouter plusieurs maisons, pourquoi ?"</h2>;
    <p>"L'adresse sélectionnée n'est pas valable, ou bien vous ne vous êtes pas déconnecté du gestionnaire de la première maison. "</p>;

</div>;

<div id="a5">;
    <h2>"Je ne trouve pas la réponse à ma question, comment régler mon problème ?"</h2>;
    <p>"Vous pouvez nous contacter directement au service client par mail : Pesimod@gmail.com ou bien par téléphone : 09 34 23 56 1O (10cts/min"</p>;
</form>";
$contenu .= "</div>";
ob_clean();
    ?>