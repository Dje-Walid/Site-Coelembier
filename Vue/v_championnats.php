
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

    <select class="moisSelect" name="mois" id="moisSelect">
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

    <select class="typeCompet" name="annee" id="anneeSelect">
        <option value="">Année</option>
        <option value="2021" onclick="setAnnee(this)" >2021</option>
        <option value="2022" onclick="setAnnee(this)">2022</option>
    </select>

    <select class="typeCompet" name="typeCompet" id="competSelect">
        <option value="">Type de compétitions</option>
        <option value="doublette" onclick="selectChampionnat(this)">Doublette</option>
        <option value="tête à tête" onclick="selectChampionnat(this)">Tête à tête</option>
        <option value="triplette" onclick="selectChampionnat(this)">Équipe</option>
    </select>

    <form action="index.php?controle=c_championnats&action=championnat" method="post">
        <input class="btnRefresh" type="submit" name="fromRefresh" value="Rénitialiser">
    </form>
    
    <?php
        if(isAdmin()) :
    ?> 
    <form action="index.php?controle=c_championnats&action=ajoutChampionnat" method="post">
        <input class="btnCreaTournoi" type="submit" name="fromCreaTournoi" value="Créer un championnat">
    </form>

    <?php
        endif;
    ?>

    <div class="admin">
    <?php
    if(!empty($championnats)) : 
        foreach($championnats as $champ) :
            $i = 1;
            $idTable = 0; ?>

        <h1 id="<?php echo dateFr($champ["dateTournoi"]); ?>" class="<?php echo $champ["typeTournoi"]; ?>"><?php echo dateFr($champ["dateTournoi"]);?> A.P.H.B TOURNOI <?php echo strtoupper($champ["typeTournoi"]); ?></h1>
        
        <form id="table" action="index.php?controle=c_championnats&action=supprimerChampionnat" method="post">
            <img id="<?php echo dateFr($champ["dateTournoi"]); ?>" class="<?php echo $champ["typeTournoi"]; ?>" src="./Vue/img/Championnats/<?php echo $champ["srcTournoi"]; ?>"/>
            <input type="text" name="idTournoi" value="<?php echo $champ["idTournoi"]; ?>" hidden>
                        
            <?php
                if(isAdmin()) :
            ?>

            <input class="btnSuppr" type="submit" name="suppBtn" value="Supprimer">
            
            <?php
                endif;
            ?>

        </form>
        <?php
            $idTable++;
            endforeach;
        endif;?>
    </div>
    

</body>