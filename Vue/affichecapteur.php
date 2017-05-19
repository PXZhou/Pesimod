<?php
    $title = "Affichage";
    $tete = "Affichage des capteurs";


    $contenu .= "
    <script type=\"text/javascript\"
                src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js\"></script>
        <script type=\"text/javascript\">

            $(document).ready(function() {

                //Default Action
                $('contenu_Chambre').hide(); //Hide all content
                $(\"ul.tabs li:first\").addClass(\"active\").show(); //Activate first tab
                $(\".tab_content:first\").show(); //Show first tab content

                //On Click Event
                $(\"ul.tabs li\").click(function() {
                    $(\"ul.tabs li\").removeClass(\"active\"); //Remove any \"active\" class
                    $(this).addClass(\"active\"); //Add \"active\" class to selected tab
                    $(\".tab_content\").hide(); //Hide all tab content
                    var activeTab = $(this).find(\"a\").attr(\"href\"); //Find the rel attribute value to identify the active tab + content
                    $(activeTab).fadeIn(); //Fade in the active content
                    return false;
                });

            });
    </script>";

    $contenu = "<ul id='listepiece' class='maliste'>";
    //  $contenu .= "<u1>";
    $contenu .= "<li><a href='#Chambre1'>Chambre</a></li>";
    $contenu .= "<li><a href='#Salon1'>Salon</a></li>";
    $contenu .= "<li><a href='#Cuisine1'>Cuisine</a></li>";
    $contenu .= "<li><a href='#Salledebain1'>Salle de bain</a></li>";
    $contenu .= "</ul>";
    $contenu .= "<div class ='contentonglet'> ";
    $contenu .= "<div id= 'contenu_Chambre' class='contentonglet'> Contenu de la chambre </div>";
    $contenu .= "<div id= 'contenu_Salon' class='contentonglet'> Contenu du Salon </div>";
    $contenu .= "<div id= 'contenu_Cuisine' class='contentonglet'> Contenu de la cuisine </div>";
    $contenu .= "<div id= 'contenu_Salledebain' class='contentonglet'> Contenu de la salle de bain </div>";
    $contenu .= "</div>";


    include 'Gabarit.php';

?>