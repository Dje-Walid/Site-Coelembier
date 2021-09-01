<?php

require("./Modele/m_championnats.php");

function championnat(){
    $championnats = allChamp();
    require("./Vue/v_championnats.php");
}

function ajoutChampionnat(){
    require("./Vue/v_ajoutChampionnats.php");
}


function dateFr($date){
    return strftime('%d-%m-%Y',strtotime($date));
}

#region AJOUT D'UN CHAMPIONNAT

//Cette fonction va vérifier si ilf aut créer un nouveau championnat ou non, puis reidirige vers la page des tournois
function triChampionnat(){
    
    extract($_POST);

    $dateTournoi;
    $typeCompet;

    if(isset($_FILES['file'])){
        $tmpName = $_FILES['file']['tmp_name'];
        $srcTournoi = $_FILES['file']['name'];
    }

    move_uploaded_file($tmpName, './Vue/img/Championnats/'.$srcTournoi);

    createTournoi($dateTournoi, $typeCompet, $srcTournoi);

    championnat();
}
#endregion

function supprimerChampionnat(){
    
    extract($_POST);

    dropTournoi($idTournoi);

    championnat();

}