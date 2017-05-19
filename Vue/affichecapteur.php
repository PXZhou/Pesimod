<?php
    $title = "Affichage";
    $tete = "Affichage des capteurs";



    $contenu = "<ul id='listepiece'>";
    $contenu .= "<li class='actif'>Chambre</li>";
    $contenu .= "<li>Salon</li>";
    $contenu .= "<li>Cuisine</li>";
    $contenu .= "<li>Salle de bain</li>";
    $contenu .= "</ul>";
    $contenu .= "<div id='contentonglet'> ";
    $contenu .= "<div class='item'> Contenu de la Chambre</div>";
    $contenu .= "<div class='item'> Contenu du Salon </div>";
    $contenu .= "<div class='item'> Contenu de la cuisine </div>";
    $contenu .= "<div class='item'> Contenu de la salle de bain </div>";
    $contenu .= "</div>";

   $jvscrpt ="
	<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
	<script>
		$(function() {
			$('#listepiece').css('display', 'block');
			$('#listepiece').click(function(event) {
				var actuel = event.target;
				if (!/li/i.test(actuel.nodeName) || actuel.className.indexOf('actif') > -1) {
					alert(actuel.nodeName)
					return;
				}
				$(actuel).addClass('actif').siblings().removeClass('actif');
				setDisplay();
			});
			function setDisplay() {
				var modeAffichage;
				$('listepiece li').each(function(rang) {
					modeAffichage = $(this).hasClass('actif') ? '' : 'none';
					$('.item').eq(rang).css('display', modeAffichage);
				});
			}
			setDisplay();
		});
	</script>";




    include 'Gabarit.php';

?>