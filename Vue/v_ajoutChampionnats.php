
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Vue/css/ajoutChampionnats.css">
    <title>Création d'un championnat</title>
</head>
<body onload="hideDiv()">

    <div class="formulaire">
        <h1>Ajouter un tournoi</h1>

        <div class="interieurFormulaire">

            <!-- ETAPE 2 -->
            <div id="Tournoi">

                <form action="index.php?controle=c_championnats&action=triChampionnat" method="post" enctype="multipart/form-data">

                    <h2>Sélectionnez le type de tournoi :</h2>
                    <select class="typeCompet" name="typeCompet" id="competSelect">
                        <option value="">Type de compétitions</option>
                        <option value="doublette" onclick="setType(this)">Doublette</option>
                        <option value="tête à tête" onclick="setType(this)">Tête à tête</option>
                        <option value="triplette" onclick="setType(this)">Équipe</option>
                    </select>

                    <h2>Sélectionnez la date du tournoi :</h2>

                    <input class="date" type="date" name="dateTournoi">

                    <h2>Photo du tournoi à ajouter :</h2>

                    <input type="file" name="file">

                    <input class="btnIns" type="submit" nome="validationTournoi" value="Suivant">

                </form>
                

            </div>
        </div>
    </div>
</body>