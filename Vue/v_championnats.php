
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Vue/css/championnats.css">
    <script src="./Vue/js/championnats.js"></script>

    <title>Championnats</title>
</head>
<body>

    <select name="mois" id="moisSelect">
        <option value="">Mois</option>
        <option value="01" onclick="setMois(this)">Janvier</option>
        <option value="02" onclick="setMois(this)">Février</option>
        <option value="03" onclick="setMois(this)">Mars</option>
        <option value="04" onclick="setMois(this)">Avril</option>
        <option value="05" onclick="setMois(this)">Mai</option>
        <option value="06" onclick="setMois(this)">Juin</option>
        <option value="07" onclick="setMois(this)">Juillet</option>
        <option value="08" onclick="setMois(this)">Août</option>
        <option value="09" onclick="setMois(this)">Septembre</option>
        <option value="10" onclick="setMois(this)">Octobre</option>
        <option value="11" onclick="setMois(this)">Novembre</option>
        <option value="12" onclick="setMois(this)">Décembre</option>
    </select>

    <!-- TODO: Année auto remplissage selon la bdd et les années déjà crée -->

    <select name="annee" id="anneeSelect">
        <option value="">Année</option>
        <option value="2021" onclick="setAnnee(this)" >2021</option>
        <option value="2022" onclick="setAnnee(this)">2022</option>
    </select>

    <select name="typeCompet" id="competSelect">
        <option value="">Type de compétitions</option>
        <option value="doublette" onclick="selectChampionnat(this)">Doublette</option>
        <option value="tête à tête" onclick="selectChampionnat(this)">Tête à tête</option>
        <option value="triplette" onclick="selectChampionnat(this)">Équipe</option>
    </select>

    <form action="index.php?controle=c_championnats&action=ajoutChampionnat" method="post">
        <input class="btnCreaTournoi" type="submit" name="fromCreaTournoi" value="Créer un championnat">
    </form>

    <?php
    if(!empty($championnats)) : 
        foreach($championnats as $champ) :
            $i = 1;
            $idTable = 0; ?>

    <h1  namespace="test" id="<?php echo dateFr($champ["dateTournoi"]); ?>" class="<?php echo $champ["typeTournoi"]; ?>"><?php echo dateFr($champ["dateTournoi"]);?> A.P.H.B TOURNOI <?php echo strtoupper($champ["typeTournoi"]); ?></h1>

    <table id="<?php echo dateFr($champ["dateTournoi"]); ?>" class="<?php echo $champ["typeTournoi"]; ?>">
        <tr>
            <th class="blue"> </th>
            <th class="blue">Noms</th>
            <th class="blue">Prenoms</th>
            <th class="blue" colspan="2">1ère partie</th>
            <th class="blue" colspan="2">2ème partie</th>
            <th class="blue" colspan="2">3ème partie</th>
            <th class="blue" colspan="2">4ème partie</th>
            <th class="blue">P</th>
            <th class="blue">C</th>
            <th class="blue">≠</th>
            <th class="blue">PG</th>
            <th class="blue">PJ</th>
            <th class="blue">Place</th>
        </tr>

            <?php
            $joueurs = allJoueur($champ["idTournoi"]);
            foreach($joueurs as $joueur) :
                $prisGlobal = $joueur["pris1"] + $joueur["pris2"] + $joueur["pris3"] + $joueur["pris4"];

                if(!isAdmin()) :
            ?> 

        <tr>
            <td class="blue" ><?php echo $i; $i++; ?></td>
            <td><button>TEST</button> <?php echo getInfoJoueur($joueur["idAdherent"])[0]["nomAdherent"]; ?></td>
            <td><?php echo getInfoJoueur($joueur["idAdherent"])[0]["prenomAdherent"]; ?></td>
            <td class="tdjaune"><?php echo $joueur["point1"];?></td>
            <td class="tdjaune"><?php echo $joueur["pris1"];?></td>
            <td class="tdgris"><?php echo $joueur["point2"];?></td>
            <td class="tdgris"><?php echo $joueur["pris2"];?></td>
            <td class="tdjaune"><?php echo $joueur["point3"];?></td>
            <td class="tdjaune"><?php echo $joueur["pris3"];?></td>
            <td class="tdgris"><?php echo $joueur["point4"];?></td>
            <td class="tdgris"><?php echo $joueur["pris4"];?></td>
            <td><?php echo $joueur["pointGlobal"];?></td>
            <td><?php echo $prisGlobal;?></td>
            <td><?php echo $joueur["pointGlobal"] - $prisGlobal;?></td>
            <td><?php echo $joueur["partieGagne"];?></td>
            <td><?php echo $joueur["partieJoue"];?></td>
            <td><?php echo $i - 1;?></td>
        </tr>

        <?php   else : ?> 

        <tr>
            <td class="blue" ><?php echo $i; $i++; ?></td>
            <td><?php echo getInfoJoueur($joueur["idAdherent"])[0]["nomAdherent"]; ?></td>
            <td><?php echo getInfoJoueur($joueur["idAdherent"])[0]["prenomAdherent"]; ?></td>
            <td class="tdjaune"><input value="<?php echo $joueur["point1"];?>" disabled></td>
            <td class="tdjaune"><input value="<?php echo $joueur["pris1"];?>" disabled></td>
            <td class="tdgris"><?php echo $joueur["point2"];?></td>
            <td class="tdgris"><?php echo $joueur["pris2"];?></td>
            <td class="tdjaune"><?php echo $joueur["point3"];?></td>
            <td class="tdjaune"><?php echo $joueur["pris3"];?></td>
            <td class="tdgris"><?php echo $joueur["point4"];?></td>
            <td class="tdgris"><?php echo $joueur["pris4"];?></td>
            <td><?php echo $joueur["pointGlobal"];?></td>
            <td><?php echo $prisGlobal;?></td>
            <td><?php echo $joueur["pointGlobal"] - $prisGlobal;?></td>
            <td><?php echo $joueur["partieGagne"];?></td>
            <td><?php echo $joueur["partieJoue"];?></td>
            <td><?php echo $i - 1;?></td>
        </tr>

        <?php   endif;
            endforeach; 
        $idTable++;?>
    </table> 

    <?php
        endforeach;
    endif;?>

</body>