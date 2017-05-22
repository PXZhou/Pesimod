
<?php
$title = "Affichage";
$tete = "Affichage des capteurs";
$dbouton1 = dbouton1("");
$dbouton2 = dbouton2("Se déconnecter");


$contenu = "<ul id='onglet'>";
$contenu .= "<li class='actif'>Chambre</li>";
$contenu .= "<li>Salon</li>";
$contenu .= "<li>Cuisine</li>";
$contenu .= "<li>Salle de bain</li>";
$contenu .= "<li>+</li>";
//-------------------------------------------------------------------------------------------------------
$contenu .= "</ul>";
$contenu .= "<div id='contentonglet'> ";
$contenu .= "<div class='item'> <h6>Capteur température</h6>
<p><img src='Style/Image/temperature.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur luminosité</h6>
<p><img src='Style/Image/luminosite.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur humidité</h6>
<p><img src='Style/Image/fumee.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur fumée</h6>
<p><img src='Style/Image/fumee.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
   <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='40' height='40' ></a></p></div>";

//----------------------------------------------------------------
$contenu .= "<div class='item'> <h6>Capteur température</h6>
<p><img src='Style/Image/temperature.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur luminosité 1</h6>
<p><img src='Style/Image/luminosite.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur luminosité 2</h6>
<p><img src='Style/Image/luminosite.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur fumée</h6>
<p><img src='Style/Image/fumee.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
   <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='40' height='40' ></a></p></div>";

//----------------------------------------------------------------
$contenu .= "<div class='item'> <h6>Capteur température</h6>
<p><img src='Style/Image/temperature.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur luminosité</h6>
<p><img src='Style/Image/luminosite.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
   <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='40' height='40' ></a></p></div>";

//----------------------------------------------------------------
$contenu .= "<div class='item'> <h6>Capteur température</h6>
<p><img src='Style/Image/temperature.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur luminosité 1</h6>
<p><img src='Style/Image/luminosite.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur luminosité 2</h6>
<p><img src='Style/Image/luminosite.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
<h6>Capteur fumée</h6>
<p><img src='Style/Image/fumee.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>

   <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='40' height='40' ></a></p></div>";

//----------------------------------------------------------------
$contenu .= "<div class='item'>";
$contenu .= "
<form method='post' action='list_detail.php'>
   <p>Nom de la pièce : <input type='text' name='nom_piece' /></p>
   <p>Type de pièce :
   <select name='typepiece'>
       <option name='Cuisine'>Cuisine</option>
       <option name='SalledeBain'>Salle de Bain</option>
       <option name='Salon'>Salon</option>
       <option name='Chambre'>Chambre</option>
       <option name='Pieceavivre'>Pièce à vivre</option>
       <option name='Cagibi'>Cagibi</option>
   </select></p>
   <p><input type='submit' value='Valider'/>
   <input type='reset' value='Annuler' /></p>

</form>";
$contenu .= "</div>";
ob_clean();
$jvscrpt = require('Vue/onglets.php');
include 'Gabarit.php';

?>