
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Vue/css/ajoutChampionnats.css">
    <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
    <script src="./Vue/js/ajoutChampionnats.js"></script>

    <title>Création d'un championnat</title>
</head>
<body onload="hideDiv()">

    <div class="formulaire">
        <div class="barre">
            <div class="cercle1"><a class="aCercle1">1</a></div>
            <div class="cercle2"><a class="aCercle2">2</a></div>
            <progress class="progress" value="10" max="200"></progress>
        </div>

        <div class="interieurFormulaire">

            <!-- ETAPE 1 -->
            <div id="Championnat">
                <h2>Voulez vous créer un nouveau championnat ?</h2>
                <!-- TODO: Oui et non reste validé a changer -->
                <input type="radio" onclick="newChamp()" value="oui" checked><a>Oui</a>
                <br>
                <input type="radio" onclick="existChamp()" value="non"><a>Non</a>

                <div id="existChamp">
                    <h2>Sélectionnez le nom du championnat :</h2>
                    <select class="nomChamp" id="nomChampSelect">
                        <option value="">Nom du championnat</option>
                    <?php $i = 0 ;
                        foreach($championnats as $champ) : ?>
                        <option value="<?php echo $champ["idChampionnat"]; ?>" onclick="setIdChamp(this)"><?php echo $champ["nomChampionnat"]; ?></option>
                    <?php $i++; 
                        endforeach; ?>
                    </select>
                </div>

                <div id="newChamp">
                    <p>Nom du championnat :</p>
                    <input id="newChampInput" class="value" type="text" placeholder="Nom du Championnat" required >
                </div>

                <input class="btnIns" type="button" value="Suivant" onclick="nextNewChamp(this)">
            </div>

            <!-- ETAPE 2 -->
            <div id="Tournoi">

                <form action="index.php?controle=c_championnats&action=triChampionnat" method="post">

                    <h2>Sélectionnez le type de tournoi :</h2>
                    <select class="typeCompet" name="typeCompet" id="competSelect">
                        <option value="">Type de compétitions</option>
                        <option value="doublette" onclick="setType(this)">Doublette</option>
                        <option value="tête à tête" onclick="setType(this)">Tête à tête</option>
                        <option value="triplette" onclick="setType(this)">Équipe</option>
                    </select>

                    <h2>Sélectionnez la date du tournoi :</h2>

                    <input class="date" type="date" name="dateTournoi">

                    <input id="nomChampInputPHP" class="value" type="text" name="nomChamp" hidden>
                    <input id="idChampInput" class="value" type="text" name="idChamp" hidden>
                    <!--
                    <input class="value" type="text" name="typeTournoi" hidden>
                    <input class="value" type="text" name="dateTournoi" hidden> -->

                    <input class="btnIns" type="submit" nome="validationTournoi" value="Suivant">
                </form>
                

            </div>
        </div>
    </div>
</body>