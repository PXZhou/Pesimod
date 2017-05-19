<!DOCTYPE html>
<html>
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
</html>