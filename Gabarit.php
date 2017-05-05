<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <link rel="stylesheet" type="text/css" href="Style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="styles/structure.css" /> -->
    <title>
        <?php echo "MyPage"; ?>
    </title>
</head>
<div id="global">
    <div id="tete">
        <?php echo "haut de page: logo etc..."; ?>
        <ul id="menu-deroulant">
            <li><a href="#"><img src = "https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-512.png" width="30" height="30" alt="Menu"/></a>
                <ul>
                    <li><a href="#">Mon Compte</a></li>

                    <li><a href="#">Maison</a></li>
                    <li><a href="#">Calendrier</a></li>
                    <li><a href="#">Edition</a></li>

                    <li><a href="#">Paramètres</a></li>
                    <li><a href="#">Deconnexion</a></li>
                </ul>
            </li>
        </ul>
    </div>







    <div id="corps">
        <div id="menu">
            <?php echo"Menu"; ?>
        </div>
        <div id="contenu">
            <?php echo "Contenu"; ?>

        </div>
    </div>

    <hr />

    <div id="pied">
        <p>
            PesiMod
        </p>
        <p>
            <a href="">Qu'est ce Pesimod ?</a> <br/>
            <a href="">Nous rejoindre</a> <br/>
            <a href="">Mentions légales</a> <br/>
        </p>
    </div>
</div>
</html>