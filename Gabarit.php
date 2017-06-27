<!DOCTYPE html>
<html>
<title>PESIMOD</title>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="Style/Image/dom.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo é ?></title>
    <link rel="stylesheet" type="text/css" href="Style/styleB.css"/>

</head>
<body>
<div id="fixe">
    <header id="haut_page">
        <a href="index.php?cible=accueil"><img src="Style/Image/banniere.png" height=65% alt="Banniere" id="banniere"  /></a>
        <img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/18301761_10209310154091018_2714229423431279309_n.jpg?oh=fdea58c79a83f4c60070654a66443a02&oe=5976BE5A" alt = "logo" id="logo"/>
        <div id="bandeau">
            <p id="b1">Pesimod, les maisons connectées</p>
            <p id="b2">Un produit Domisep</p>
            <p></p>
        </div>
    </header>
    <div id="menu_top">

        <ul id="menu_horizontal">
            <li><a href="FAQ.php">Aide</a></li>
            <li><a href="Index.php">Domisep</a></li>
            <li><a href="index.php?cible=deco"><?php echo($deconnection);?></a></li>

        </ul>


    </div>

</div>

<section>
    <h1> <?php echo ($tete= ''); ?> </h1>
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
        <li>Newsletter :</li>
        <!--icone publié par Freepik sur le site flaticon.com, license : Flaticon Basic License-->
        <li id="a_cote1"><a href="https://fr-fr.facebook.com/" target="_blank"><img src="Style/Image/001-facebook.png" /></a></li>
        <li id="a_cote2"><a href="https://twitter.com/" target="_blank"><img src="Style/Image/002-twitter.png"/></a></li>
        <li id="a_cote3"><a href="https://plus.google.com/?hl=fr" target="_blank"><img src="Style/Image/003-google-plus.png"/></a></li>
    </ul>
    <!--<img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/18301761_10209310154091018_2714229423431279309_n.jpg?oh=fdea58c79a83f4c60070654a66443a02&oe=5976BE5A" alt = "logo" id="logo"/>-->
</footer>
    <?php echo ($jvscrpt = " "); ?>
</body>
</html>