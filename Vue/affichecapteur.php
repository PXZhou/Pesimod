<?php
    $title = "Affichage";
    $tete = "Affichage des capteurs";



    $contenu = "<ul id='listepiece' class='maliste'>";
    //  $contenu .= "<u1>";
    $contenu .= "<li><a href='#Chambre1' divToShow='contenu_Chambre1'>Chambre</a></li>";
    $contenu .= "<li><a href='#Salon1' divToShow='contenu_Salon1'>Salon</a></li>";
    $contenu .= "<li><a href='#Cuisine1'  divToShow='contenu_Cuisine1'>Cuisine</a></li>";
    $contenu .= "<li><a href='#Salledebain1' divToShow='contenu_Salledebain1'>Salle de bain</a></li>";
    $contenu .= "</ul>";
    $contenu .= "<div id='contentonglet'> ";
    $contenu .= "<div id= 'contenu_Chambre1' class='show'> Contenu de la Chambre 1 </div>";
    $contenu .= "<div id= 'contenu_Salon1' style='display:none;'> Contenu du Salon </div>";
    $contenu .= "<div id= 'contenu_Cuisine1' style='display:none;'> Contenu de la cuisine </div>";
    $contenu .= "<div id= 'contenu_Salledebain1' style='display:none;'> Contenu de la salle de bain </div>";
    $contenu .= "</div>";

   $contenu .="
    <script type=\"text/javascript\"
            src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        $('#menu a' ).click(function() {
        elementToFadeIn = $(this).attr('divToShow');
  	    $('.show').fadeOut(function(){
            $(this).removeClass('show');
            $('#'+elementToFadeIn).fadeIn(function(){
                 $(this).addClass('show');
          });
      });
    });</script>";




    include 'Gabarit.php';

?>