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
$ongle = tata($_SESSION["userID"],$_SESSION["userID"],$bdd);
$contenu .= "<li class='actif'> $ongle[0] </li>";
$long = count($ongle);
for ($i=1; $i < $long; $i++){
    $contenu .= "<li> $ongle[$i] </li>";
}
$contenu .= "<li>+</li>";
$contenu .= "</ul>";
//-------------------------------------------------------------------------------------------------------

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
            <p id='donnee'>70%</p>
            
        </div>
        <div class='element'>
            <p><img src='Style/Image/humidite.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium1' id='premium' type='checkbox' checked>
            <p id='donnee'>50%</p>
        </div>
        
    
    
        <div class='element'>
            <p><img src='Style/Image/fumee.png' alt='temp' width='230' ></p>
            
        </div>
        
        
        <div class='element'>
            <p><img src='Style/Image/Volet.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium1' id='premium' type='checkbox' checked>
            <label for='premium1' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>
        
        
        
        <div class='element'>
            <p><img src='Style/Image/Volet.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium1' id='premium' type='checkbox' checked>
            <label for='premium1' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>
        
       </div>";


       $ongle2 = titi(1,1,$bdd);
echo ("<p>");

for ($i=0; $i < $long2 ; $i++) {

    echo('num série : '.$ongle2[$i]['num_serie'] . "<br>");
    echo('nom capteur : '.$ongle2[$i]['nom_capteur'] . "<br><br>");

}
echo ("</p>");
        
$contenu.="<p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='50' height='50' ></a></p>
</div>";
//----------------------------------------------------------------
$contenu .= "<div class='item'>
    <div id='contener'>
        <div class='element'>
            <p>
            <img src='Style/Image/thermometer.png' alt='temp' width='220' ></p>
            <input id='echelle' type='range'>
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/luminosite.png' alt='temp' width='230' ></p>
            <p id='donnee'>10%</p>
        </div>
        
        
        <div class='element'>
            <p><img src='Style/Image/humidite.png' alt='temp' width='230' ></p>
            <p id='donnee'>55%</p>
            
        </div>
        
    
    
        <div class='element'>
            <p><img src='Style/Image/fumee.png' alt='temp' width='230' ></p>
            
        </div>
        
        
        <div class='element'>
            <p><img src='Style/Image/Volet.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium1' id='premium' type='checkbox' checked>
            <label for='premium1' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>
        
        
        <div class='element'>
            <p><img src='Style/Image/Volet.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium1' id='premium' type='checkbox' checked>
            <label for='premium1' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>
        
        
       </div>
    
    
    <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='50' height='50' ></a></p></div>";
//----------------------------------------------------------------
$contenu .= "<div class='item'>
    <div id='contener'>
        <div class='element'>
            <p>
            <img src='Style/Image/thermometer.png' alt='temp' width='220' ></p>
            <input id='echelle' type='range'>
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/luminosite.png' alt='temp' width='230' ></p>
            <p id='donnee'>10%</p>
        </div>
        <div class='element'>
            <p><img src='Style/Image/humidite.png' alt='temp' width='230' ></p>
            <p id='donnee'>64%</p>
        </div>
        
    
    
        <div class='element'>
            <p><img src='Style/Image/fumee.png' alt='temp' width='230' ></p>
            
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/Volet.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium1' id='premium' type='checkbox' checked>
            <label for='premium1' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>
        
       </div>
   <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='50' height='50' ></a></p></div>";
//----------------------------------------------------------------
$contenu .= "<div class='item'>
    <div id='contener'>
        <div class='element'>
            <p>
            <img src='Style/Image/thermometer.png' alt='temp' width='220' ></p>
            <input id='echelle' type='range'>
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/luminosite.png' alt='temp' width='230' ></p>
            <p id='donnee'>80%</p>
        </div>
        <div class='element'>
            <p><img src='Style/Image/humidite.png' alt='temp' width='230' ></p>
            <p id='donnee'>40%</p>
        </div>
        
    
    
        <div class='element'>
            <p><img src='Style/Image/fumee.png' alt='temp' width='230' ></p>
           
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/Volet.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium1' id='premium' type='checkbox' checked>
            <label for='premium1' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>
        
       </div>
   <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='50' height='50' ></a></p></div>";

//----------------------------------------------------------------


//----------------------------------------------------------------
$contenu .= "<div class='item'>
    <div id='contener'>
        <div class='element'>
            <p>
            <img src='Style/Image/thermometer.png' alt='temp' width='220' ></p>
            <input id='echelle' type='range'>
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/luminosite.png' alt='temp' width='230' ></p>
            <p id='donnee'>10%</p>
        </div>
   
    
        <div class='element'>
            <p><img src='Style/Image/fumee.png' alt='temp' width='230' ></p>
            
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/Volet.png' alt='temp' width='230' ></p>
            <input class='switch' name='premium1' id='premium' type='checkbox' checked>
            <label for='premium1' class='ui-content' >
              <div class='ui-switch-range'>
                 <div class='ui-switch-handle'>
                 </div>
              </div>
            </label>
        </div>
        
        
       </div>
   <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='50' height='50' ></a></p></div>";

//----------------------------------------------------------------

//----------------------------------------------------------------
$contenu .= "<div class='item'>
    <div id='contener'>
        <div class='element'>
            <p>
            <img src='Style/Image/thermometer.png' alt='temp' width='220' ></p>
            <input id='echelle' type='range'>
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/luminosite.png' alt='temp' width='230' ></p>
            <p id='donnee'>9%</p>
        </div>
        
        <div class='element'>
            <p><img src='Style/Image/humidite.png' alt='temp' width='230' ></p>
            <p id='donnee'>43%</p>
        </div>
        
    
   
        
       </div>
   <p><a href='#'><img src='Style/Image/Poubelle.png' alt='Suppression' width='50' height='50' ></a></p></div>";

//----------------------------------------------------------------


/*$contenu .= "<div class='item'>";
$ongle2 = titi(1,1,$bdd);
$long2=count($ongle2);
//echo($long2);

echo ("<p>");

for ($i=0; $i < $long2 ; $i++) {

    echo('num série : '.$ongle2[$i]['num_serie'] . "<br>");
    echo('nom capteur : '.$ongle2[$i]['nom_capteur'] . "<br><br>");

}
echo ("</p>");

       /*$ongle2 = titi(1,1,$bdd);
       $long2=count($ongle2);
echo ("<p>");

for ($i=0; $i < $long2 ; $i++) {

    echo('num série : '.$ongle2[$i]['num_serie'] . "<br>");
    echo('nom capteur : '.$ongle2[$i]['nom_capteur'] . "<br><br>");

}
echo ("</p>");*/
//$contenu .= "</div>";

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