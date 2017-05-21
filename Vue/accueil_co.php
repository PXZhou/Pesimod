<?php
$tete = "Espace Personnel";
$contenu = "<p>Accueil</p>

    <p><a href='index.php?cible=affichecapteur'><img src='Style/Image/001-facebook.png'></a></p>";
$jvscript = "";

ob_clean();

$contenu = "<ul id='onglet'>";
$contenu .= "<li class='actif'>Gestion Capteurs</li>";
$contenu .= "<li>Editeur de pieces</li>";
$contenu .= "<li>Programmation avancee des capteurs</li>";
$contenu .= "<li>Activites recentes</li>";
$contenu .= "<li>+</li>";
$contenu .= "</ul>";
$contenu .= "<div id='contentonglet'> ";
$contenu .= "<div class='item'> affichecapteur.php </div>;
    <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='40' height='40' ></a></p></div>";
$contenu .= "<div class='item'> ajoutpiece.php </div>";
$contenu .= "<div class='item'> Calendrier.php </div>";
$contenu .= "<div class='item'> activitesrecentes.php </div>";
$contenu .= "<div class='item'>";
$contenu .= "


</form>";
$contenu .= "</div>";

$jvscrpt = require('Vue/onglets.php');
include 'Gabarit.php';

