
<?php
        include "Editeur.php";
        $title = "Editeur";
        $tete = "Editeur";
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=pesimod;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }



        $email = "marie.poppins@gmail.com";
        $email1 = "jacque.cartier@gmail.com";
        $contenu = "<ul id='onglet'>";
        $contenu .= "<li class='actif'>Ajout de maison</li>";
        $contenu .= "<li >Ajout de piece</li>";
        $contenu .= "<li>Ajout de Capteur</li>";
        $contenu .= "</ul>";
        $contenu .= "<div id='contentonglet'> ";
        $contenu .= "<div class='item'> ";
        $contenu .= Ajout_maison(get_id_user($emial1,$bdd));
        $contenu .= "</div>";

        $contenu .=  "<div class='item'>";
        $contenu .= ajout_piece(get_id_maison($email1,$bdd),$bdd,get_id_user($emial1,$bdd));
        $contenu .= "</div>";

        $contenu .=  "<div class='item'>";
        $contenu .=  editeur($bdd,$email1);
        $contenu .= "</div>";

        $jvscrpt = require('onglets.php');


        include 'Gabarit.php';

?>
