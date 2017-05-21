<ul id='addpiece'>
    <li>Nom de la pièce : </li> <input type='text' name='nom_piece' />
    <li>Type de pièce :</li>
    </ul>

<form method="post" action="list_detail.php">
    <select name="typepiece">

        <option name="Cuisine">cuisine</option>
        <option name="SalledeBain">Salle de Bain</option>
        <option name="Salon">Salon</option>
        <option name="Chambre">Chambre</option>
        <option name="Pieceavivre">Pièce à vivre</option>
        <option name="Cagibi">Cagibi</option>
        <input type="submit" name="Valider" value="OK1"/>

    </select>

</form>

<?php
//On traite le formulaire
if(isset($_POST['champ'])){
    echo ' variable projet : ' ;
    $tt= $_POST['champ'];
    echo $tt;

}
?>