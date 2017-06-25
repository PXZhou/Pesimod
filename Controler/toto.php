<?php


    try{
        $bdd = new PDO('mysql:host=localhost;dbname=pesimod;charset=utf8','root','');
    }
    catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

   function tata($id_utilisateur, $id_maison,$bdd){
       $tab=array();
       $req = $bdd->query("SELECT nom FROM piece WHERE id_maison ='$id_maison' AND id_utilisateur = '$id_utilisateur'");
       while ($donnes = $req->fetch()){
           $tab[] = $donnes['nom'];
       }
       return $tab;

   }

    /*function titi($id_utilisateur,$bdd){

        $req = $bdd->query("SELECT nom, num_serie, id_piece FROM capteur WHERE id_utilisateur = '$id_utilisateur'");
        $tab= $req -> fetchAll();
        echo($tab['nom']);
        return $tab;
    }*/


    function titi ($id_utilisateur,$id_piece,$bdd){
        //$req = $bdd->query("SELECT id FROM piece WHERE id_utilisateur = '1'");
            /*while ($data = $req->fetch())
            {
                $id_piece = $data['id'];
                //echo('id_Piece : '.$id_piece.'<br>');
*/
                $req2 = $bdd->query("SELECT num_serie, nom FROM capteur WHERE id_piece ='$id_piece' AND id_utilisateur = '$id_utilisateur'");
                $i = 0;
                while ($data2 = $req2->fetch())
                {
                   $num_serie= $data2['num_serie'];
                   $nom_capteur = $data2['nom'];
                   //echo('$i :'.$i);
                    //echo('Nom série : '.$num_serie.'<br>');
                   //echo('Nom capteur : '.$nom_capteur.'<br><br>');
                    $tab_capteur[][] = array();
                    $tab_capteur[$i]['num_serie'] = $num_serie;
                    $tab_capteur[$i]['nom_capteur'] = $nom_capteur;

                    $i = $i + 1;
                //}
            }
            return $tab_capteur;
    }

    /*$ongle = titi(1,$bdd);
    foreach ($ongle AS $ligne){
        echo($ligne['id_piece'].'<br>');
    }

echo($ongle[2][0]);*/
$ongle = tata(1,1,$bdd);
$ongle2 = titi(1,2,$bdd);


/*$long=count($ongle);
$long2=count($ongle2);
for ($i=0; $i < $long; $i++) {
    echo($ongle[$i]);
    echo("<p>");
    for ($j = 1; $j < $long; $j=$j+1) {
        if ($ongle2[$j][0] = $j) {
            echo('capteur'.' ');
            echo($ongle2[$j][1]);
            echo('fin'.'<br>');
        }else{
            break;
        }

    }
    echo("</p>");
}
*/


$long2=count($ongle2);
//echo($long2);

echo ("<p>");

for ($i=0; $i < $long2 ; $i++) {

        echo('num série : '.$ongle2[$i]['num_serie'] . "<br>");
        echo('nom capteur : '.$ongle2[$i]['nom_capteur'] . "<br><br>");

}
echo ("</p>");
