<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Vue/css/adhesion.css">
    <title>Adhesion</title>
</head>
<body>
    <div class="condition">
        <h1>CONDITIONS D'ADHESION</h1>
        <p>Nos conditions d'adhésions sont les suivantes :</p>
        <p>Individuel : 30,00€ Renouvellement : 25,00€</p>
        <p>Couple: 50,00€ Renouvellement: 40,00€</p>
        <p> Période d'adhésion : 1er janvier au 31 décembre</p>
        <p class="adhe">Si vous souhaitez nous rejoindre, cliquez sur le bouton "Adhérer" pour télécharger le PDF</p>
        <a href ="./Vue/img/APHB.pdf" download> ADHÉRER </a>

        <form action="index.php?controle=c_adhesion&action=pdfDL" method="post">

            <p>Nom :</p>
            <input class="value" type="text" name="nom" placeholder="Votre nom" required >

            <p>Prenom :</p>
            <input class="value" type="text" name="prenom" placeholder="Votre prenom" required >

            <p>Date de naissance :</p>
            <input class="value" type="text" name="dateNaissance" placeholder="Votre date de naissance" required >

            <p>Adresse :</p>
            <input class="value" type="text" name="adresse" placeholder="Votre adresse" required >

            <p>Téléphone :</p>
            <input class="value" type="text" name="telephone" placeholder="Votre numéro de téléphone" required >

            <p>Email :</p>
            <input class="value" type="password" name="mail" placeholder="Votre email" required >

            <br>

            <input class="btnIns" type="submit" name="formInscription" value="Pdf personnalisé">

        </form>
    </div>
</body>
</html>