<?php

require("./Modele/m_championnats.php");

function championnat(){
    $championnats = allChamp();
    require("./Vue/v_championnats.php");
}

function ajoutChampionnat(){
    $championnats = allChampAjout();
    require("./Vue/v_ajoutChampionnats.php");
}


function dateFr($date){
    return strftime('%d-%m-%Y',strtotime($date));
}

#region AJOUT D'UN CHAMPIONNAT

//Cette fonction va vérifier si ilf aut créer un nouveau championnat ou non, puis reidirige vers la pages des tournois
function triChampionnat(){
    
    extract($_POST);

    $nomChamp;
    $idChamp;
    $dateTournoi;
    $typeCompet;

    if($idChamp == "undefined"){
        createChampionnat($nomChamp, $dateTournoi, $typeCompet);
    }
    else{
        createTournoi($idChamp, $dateTournoi, $typeCompet);
    }

    championnat();
}
#endregion