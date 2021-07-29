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
    <div class="page">

        <div class="adhesion">
                <h1>Adhérer</h1>

                <form action="index.php?controle=c_adhesion&action=pdfDL" method="post">

                    <p>Nom :</p>
                    <input class="value" type="text" name="nomIns" placeholder="Votre nom" required >
                    
                    <p>Prenom :</p>
                    <input class="value" type="text" name="prenomIns" placeholder="Votre prenom" required >

                    <p>Date de naissance :</p>
                    <input class="value" type="text" name="dateNaissance" placeholder="Votre date de naissance" required > 

                    <p>Adresse :</p>
                    <input class="value" type="text" name="adresse" placeholder="Votre adresse" required >

                    <p>Téléphone :</p>
                    <input class="value" type="text" name="telephoneIns" placeholder="Votre numéro de téléphone" required >

                    <p>Adresse mail :</p>
                    <input class="value" type="mail" name="mailIns" placeholder="Votre email" required >
                    <br>

                    <input class="btnIns" type="submit" name="formInscription" value="J'adhère !">

                </form>
        </div>
                
        <div class="pdf">
            <h1>FORMULAIRE D'ADHESION</h1>
            <p>Période d'adhésion : 1er janvier au 31 décembre</p>
            <p>Le formulaire est à remplir et à rapporter.</p>
            <p>Vous avez la possibilité de le pré-remplir le formulaire en cliquant sur "J'adhère" après avoir entré les informations necessaires.</p>

            <table class="tarif">
            <thead>
                <tr>
                    <th colspan="3">TARIF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>1ère année</td>
                    <td>Renouvellement</td>
                <tr>
                    <td>Individuel</td>
                    <td>30,00€</td>
                    <td>25,00€</td>
                </tr>
                <tr>
                    <td>Couple</td>
                    <td>50,00€</td>
                    <td>40,00€</td>
            </tbody>
            </table>
            <p class="adhe">Sinon vous pouvez télécharger le PDF vierge afin de le remplir à la main en cliquant sur le bouton "Adhérer" pour télécharger le PDF</p>
            <p class="ad">*Merci de bien vouloir remplir deux formulaires différents si vous souhaitez vous inscrire en tant que couple</p>
            <a href ="./Vue/img/APHB.pdf" download> ADHÉRER </a>
        </div>

    </div>


</body>
</html>