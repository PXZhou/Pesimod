<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="Style/Image/dom.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($title) ?></title>
    <link rel="stylesheet" type="text/css" href="styleB.css"/>

</head>
<body>
<div id="fixe">
    <header id="haut_page">
        <a href="#"><img src="Style/Image/banniere.png" alt="Banniere"/></a>
    </header>
    <div>
        <ul id="menu_horizontal">
            <li class="bouton_gauche">
                <ul id="menu-deroulant">
                    <li><a href="#"><img src = "https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-512.png" width="25" height="20" alt="Menu"/></a>
                        <ul>
                            <li><a href="">Mon Compte</a>
                            </li><li><hr></li>
                            <li><a href="">Maison</a></li>
                            <li><a href="">Calendrier</a></li>
                            <li><a href="">Edition</a></li>
                            <li><hr></li>
                            <li><a href="">Paramètres</a></li>
                            <li><a href="">Deconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="bouton_droite"><a href="index.php?cible=s_inscrire">S'inscrire</a></li>
            <li class="bouton_droite"><a href="index.php?cible=se_connecter">Se connecter</a></li>
        </ul>
    </div>
</div>
<h1><?php echo ($tete); ?></h1>
<section>
    <p>
        <?php echo($contenu); ?>
    </p>
</section>
<footer id="bas_page">
    <ul>
        <li><strong>Domisep</strong></li>
        <li><a href="">Qui sommes nous ?</a></li>
        <li><a href="">Mentions légales</a></li>
        <li><a href="">Politique de confidentialité</a></li>
    </ul>
    <ul>
        <li><strong>Service</strong></li>
        <li><a href="">Documentation</a></li>
        <li><a href="">Nous rejoindre</a></li>
    </ul>
    <ul>
        <li>Newsletter :</li>
        <!--icone publié par Freepik sur le site flaticon.com, license : Flaticon Basic License-->
        <li id="a_cote1"><a href="https://fr-fr.facebook.com/"><img src="Style/Image/001-facebook.png"/></a></li>
        <li id="a_cote2"><a href="https://twitter.com/"><img src="Style/Image/002-twitter.png"/></a></li>
        <li id="a_cote3"><a href="https://plus.google.com/?hl=fr"><img src="Style/Image/003-google-plus.png"/></a></li>
    </ul>
    <img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/18301761_10209310154091018_2714229423431279309_n.jpg?oh=fdea58c79a83f4c60070654a66443a02&oe=5976BE5A" alt = "logo" id="logo"/>
</footer>
    <?php echo ($jvscrpt); ?>
</body>
</html>