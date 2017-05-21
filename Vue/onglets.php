<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(function() {
        $('#onglet').css('display', 'block'); //Afficher la barre d'onglet
        $('#onglet').click(function(event) { //Evenement clique
            var actuel = event.target; // emplacement du clique
            if (!/li/i.test(actuel.nodeName) || actuel.className.indexOf('actif') > -1) {
               /* alert(actuel.nodeName)*/
                return;
            } //Si pas onglet ou si onglet deja actif, ne rien faire
            $(actuel).addClass('actif').siblings().removeClass('actif');
            setDisplay();
        });
        function setDisplay() {
            var modeAffichage;
            $('#onglet li').each(function(rang) {
                modeAffichage = $(this).hasClass('actif') ? '' : 'none';
                $('.item').eq(rang).css('display', modeAffichage);
            });
        }
        setDisplay();
    })
</script>