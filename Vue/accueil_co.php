<?php
$title = "Espace client - Pesimod";
$tete = "Espace Personnel";
$dbouton1 = dbouton1("");
$dbouton2 = dbouton2("Se déconnecter");

$contenu = "<p>Accueil</p>
   <p><a href='index.php?cible=affichecapteur'>Afficher les capteurs</a></p>";
$jvscript = "";




$jvscript = "";

"
   <p><a href='index.php?cible=affichecapteur'><img src='Style/Image/001-facebook.png'></a></p>";
$contenu .= "<p>Espace Personnel</p>";
$contenu = "<ul id='onglet'>";
$contenu .= "<li class='actif'>Gestion Capteurs</li>";
$contenu .= "<li>Editeur de Pieces</li>";
$contenu .= "<li>Programmation Calendrier</li>";
$contenu .= "<li>Activités recentes</li>";
$contenu .= "<li>+</li>";
$contenu .= "</ul>";
$contenu .= "<div id='contentonglet'> ";
$contenu .= "<div class='item'> <p><a href='index.php?cible=affichecapteur'>Afficher les capteurs</a></p>
<a href='index.php?cible=gestioncapt'>Edition</a>";
$contenu .= "<div class='item'>ajoutpiece.php</div>";
$contenu .= "<div class='item'> Calendrier.php</div>";
$contenu .= "<div class='item'>activitesrecentes.php</div>";
$contenu .= "<div class='item'>";
$contenu .= "
</form>";
$contenu .= "</div>";
ob_clean();

$jvscrpt = require('Vue/onglets.php');
include 'Gabarit.php';
?>
