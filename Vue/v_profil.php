<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Vue/css/profil.css">

    <title>Profil</title>
</head>
<body>
<div class="page">
    <div class="information">
        <h1> Informations </h1></br></br>
        <p>Votre Nom : <?php echo $_SESSION['user']['nomAdherent']?> </p>
        <p>Votre Prenom : <?php echo $_SESSION['user']['prenomAdherent']?> </p>
        <p>Votre numéro de téléphone : <?php echo $_SESSION['user']['telephoneAdherent']?> </p>
        <p>Votre mail : <?php echo $_SESSION['user']['mailAdherent']?> </p>
        <p>État paiement : <?php if($_SESSION['user']['paiementAdherent'] == 0){echo "Paiement en attente";}else{ echo "Validé";} ?> </p>
    </div>
</div>

<?php if(isAdmin()) : ?>

    <table>
        <tr>
            <th class="blue">Noms</th>
            <th class="blue">Prenoms</th>
            <th class="blue">A payé</th>
            <th class="blue">Est admin</th>
        </tr>

            <?php
            $adherents = allAdherents();
            foreach($adherents as $adherent) :
            ?> 

        <tr>
            <td><?php echo $adherent["nomAdherent"];?></td>
            <td><?php echo $adherent["prenomAdherent"];?></td>
            <td><?php echo $adherent["paiementAdherent"];?></td>
            <td><?php echo $adherent["isAdmin"];?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php endif; ?>