<?php /*
$name = $_POST['old_name'];
$nvName = $_POST['nom_pièce'];
$nbre_temp =$_POST['choix0'];
$nbre_ca = $_POST['choix3'];
$nbre_ch = $_POST['choix4'];
$nbre_presence=$_POST['choix1'];
$nbre_fumée=$_POST['choix2'];
$nbre_lumière=$_POST['choix5'];
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=espace_clientb;charset=utf8', 'root', 'root');
}

catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
if (!empty($_POST['Valider'])){

     $req = $bdd->exec("UPDATE piece SET Nom ='$nvName', Nombre_temp = ".$nbre_temp.", Nombre_presence =".$nbre_presence.",
      Nombre_ch = ".$nbre_ch.", Nombre_fumée=".$nbre_fumée.", Nombre_ca =".$nbre_ca.", Nombre_lum =".$nbre_lumière." WHERE Nom = '$name'");

     /*$req ->execute(array
             'nvNom' => $name,
             'nvNombre_temp' => $_POST['choix0'],
             'nvNombre_ca' => $_POST['choix3'],
             'nvNombre_ch' => $_POST['choix4'],
             'nvNombre_presence' => $_POST['choix1'],
             'nvNombre_fumée' => $_POST['choix2'],


         )

     );*/}
elseif (!empty($_POST['Supprimer'])) {
    $req = $bdd->exec("DELETE FROM piece WHERE Nom='$name'");
}
if (!empty($_POST['Ajouter'])){
    $etage = $_POST['Etage'];
    $req = $bdd->exec("INSERT INTO piece(Nom, Nombre_temp, Nombre_ca, Nombre_ch, Nombre_presence, Nombre_fumée,Nombre_lum,Etage)
VALUES ('$nvName',".$nbre_temp.",".$nbre_ca.",".$nbre_ch.",".$nbre_presence.",".$nbre_fumée.",".$nbre_lumière.",".$etage.")");
}
if (!empty($_POST['Modification'])) {
    $etage = $_POST['Modif_etage'];
    $name = $_POST['client'];
    $req = $bdd->exec("UPDATE maison SET Etage=".$etage." WHERE Nom = '$name'");
}

header('Location: function.php');
exit();
*/
?>
