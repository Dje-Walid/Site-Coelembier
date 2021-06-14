<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Vue/css/connexion.css">

    <title>Connexion / Inscription</title>
</head>
<body>

    <div class="page">

        <div class="connexion">
            <h1>Connexion</h1>

            <form action="index.php?controle=c_connexion&action=userExist" method="post">

                <p>Adresse mail :</p>
                <input class="valueCo" type="mail" name="mailCo" placeholder="Votre email" required >

                <p>Mot de passe :</p>
                <input class="valueCo" type="password" name="mdpCo" placeholder="Votre mot de passe" required >

                <br>

                <a class="mdpOublie" href="#">Vous avez oublié votre mot de passe ?</a>

                <br>

                <input class="btnCo" type="submit" name="formConnexion" value="Se connecter">


            </form>

        </div>

        <div class="inscription">
            <h1>Inscription</h1>

            
            <form action="index.php?controle=c_connexion&action=userCrea" method="post">

                <p>Nom :</p>
                <input class="value" type="text" name="nomIns" placeholder="Votre nom" required >
                
                <p>Prenom :</p>
                <input class="value" type="text" name="prenomIns" placeholder="Votre prenom" required >

                <p>Téléphone :</p>
                <input class="value" type="text" name="telephoneIns" placeholder="Votre numéro de téléphone" required >

                <p>Adresse mail :</p>
                <input class="value" type="mail" name="mailIns" placeholder="Votre email" required >

                <p>Mot de passe :</p>
                <input class="value" type="password" name="mdpIns" placeholder="Votre mot de passe" required >

                <p>Confirmer votre mot de passe :</p>
                <input class="value" type="password" name="mdpConfIns" placeholder="Veuillez confirmer votre mot de passe" required >

                <br>

                <input class="btnIns" type="submit" name="formInscription" value="S'inscrire">

            </form>
        </div>

    </div>

</body>