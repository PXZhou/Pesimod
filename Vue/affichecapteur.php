
<?php
include "Controler/toto.php";
try{
    $bdd = new PDO('mysql:host=localhost;dbname=pesimod;charset=utf8','root','');
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}


$title = "Affichage";
$tete = "Affichage des capteurs";


$contenu = "<ul id='onglet'>";
$ongle = tata(1,1,$bdd);

$contenu .= "<li class='actif'> $ongle[0] </li>";

$long = count($ongle);
for ($i=1; $i < $long; $i++){
    $contenu .= "<li> $ongle[$i] </li>";
}






$contenu .= "<li>+</li>";
$contenu .= "</ul>";

//-------------------------------------------------------------------------------------------------------


/*
 commencer par div class='item'
autant de ça que de piece

dans chaque onglet (item):
commencer par (<div id='centener'>)et le fermer A LA FIN DE LONGLET

while chaque capteur qui correspond à la pièce:
les afficher entre des balises <div class='element'></div>
t'auras qu'à juste afficher le nom de la reference
 */




$contenu .= "<div id='contentonglet'> ";
$contenu .= "<div class='item'>
    <div id='contener'>
        <div class='element'>
            <p>
            <img src='Style/Image/thermometer.png' alt='temp' width='220' ></p>
            <input id='echelle' type='range'>
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/luminosite.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium' id='premium' type='checkbox' checked>
            <label for='premium' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>

        <div class='element'>
            <p><img src='Style/Image/humidite.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium1' id='premium' type='checkbox' checked>
            <label for='premium1' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>
        
    
    
        <div class='element'>
            <p><img src='Style/Image/fumee.png' alt='temp' width='230' ></p>
            <label for='premium1' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>
       </div>
        
       <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='50' height='50' ></a></p>
     </div>   
    ";

//----------------------------------------------------------------

$contenu .= "<div class='item'>
    <bloc id='toto'>
        <h6>Régulateur température</h6>
        <p><img src='Style/Image/temperature.png' alt='temp' width='40' height='40' ></p>
        <input id='echelle' type='range'>
    </bloc>
    
    <bloc id='toto'>
        <h6>Capteur luminosité 1</h6>
        <p><img src='Style/Image/luminosite.png' alt='temp' width='40' height='40' ></p>
        <img src='Style/Image/on.png' alt='switch' width='35' height='35'>
    </bloc>
    
    <bloc id='toto'>
        <h6>Capteur luminosité 2</h6>
        <p><img src='Style/Image/luminosite.png' alt='temp' width='40' height='40' ></p>
        <img src='Style/Image/on.png' alt='switch' width='35' height='35'>
    </bloc>
    
    <bloc id='toto'>
        <h6>Capteur fumée</h6>
        <p><img src='Style/Image/fumee.png' alt='temp' width='40' height='40' ></p>
        <img src='Style/Image/on.png' alt='switch' width='35' height='35'>
    </bloc>
    
    
    <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='40' height='40' ></a></p></div>";

//----------------------------------------------------------------

$contenu .= "<div class='item'> <h6>Capteur température</h6>
<p><img src='Style/Image/temperature.png' alt='temp' width='40' height='40' ></p>
<input id='echelle' type='range'>
<h6>Capteur luminosité</h6>
<p><img src='Style/Image/luminosite.png' alt='temp' width='40' height='40' ></p>
<img src='Style/Image/on.png' alt='switch' width='35' height='35'>
   <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='40' height='40' ></a></p></div>";

//----------------------------------------------------------------
$contenu .= "<div class='item'> <h6>Capteur température</h6>
<p><img src='Style/Image/temperature.png' alt='temp' width='40' height='40' ></p>
<input id='echelle' type='range'>
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
   <p><input type='submit' value='Valider'/>
   <input type='reset' value='Annuler' /></p>

</form>";
$contenu .= "</div>";
ob_clean();
$jvscrpt = require('Vue/onglets.php');

include 'Gabarit.php';

?>