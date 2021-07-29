<head>
<link rel="stylesheet" type="text/css" href="./Vue/css/header.css">
<link href="https://fr.allfont.net/allfont.css?fonts=stencil" rel="stylesheet" type="text/css" />
<link href="https://fr.allfont.net/allfont.css?fonts=bikham-cyr-script" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="./Vue/img/LOGO-APHB_1.png" />
</head>
<body>

    <div class="bandeRouge">
        <div class="nom">
            <h1 id="nePasSupp">AMICALE DE PETANQUE DE LA HAIE-BERTRAND </h1>
            <h2>La Pétanque Loisir et Passion</h2>
        </div>
    </div>

    <img class="logo" src="./Vue/img/LOGO-APHB_1.png"/>

    <nav class="stroke">
        <ul>
            <li><a href="index.php?controle=c_accueil&action=acc">ACCUEIL</a></li>
            <li><a href="index.php?controle=c_amical&action=amical">L'AMICALE</a></li>
            <li class="deroulant"><a href="#">ACTIVITES</a>
                <ul class="sous">
                    <li><a href="index.php?controle=c_championnats&action=championnat">Championnats</a></li>
                    <li><a href="index.php?controle=c_festivite&action=festivite">Festivités</a></li>
                </ul>
            </li>
            <li class="deroulant"><a href="#">PHOTOS-VIDEOS</a>
                <ul class="sous">
                    <li><a href="index.php?controle=c_photos&action=photo">Photos</a></li>
                    <li><a href="index.php?controle=c_videos&action=video">Vidéos</a></li>
                </ul>
            </li>
            <li><a href="index.php?controle=c_adhesion&action=adhesion">ADHESION</a></li>
            <li><a href="index.php?controle=c_contact&action=contact">CONTACTS</a></li>

            <?php require("./Controleur/c_aphb.php");
                  if(!isConnected()) : ?>
            <li><a href="index.php?controle=c_connexion&action=connexion">Connexion / Inscription</a></li>
            <?php else : ?>
            <li class="deroulant"><a href="index.php?controle=c_profil&action=profil">Profil</a>
                <ul class="sous">
                    <li><a href="index.php?controle=c_profil&action=deconnexion">Déconnexion</a></li>
                </ul>
            </li>
            <?php endif; ?>

        </ul>
    </nav>
</body>