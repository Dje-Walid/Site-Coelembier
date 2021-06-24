<?php

function championnat(){
    require("./Modele/m_championnats.php");
    $championnats = allChamp();
    require("./Vue/v_championnats.php");
}

function ajoutChampionnat(){
    require("./Modele/m_championnats.php");
    $championnats = allChamp();
    require("./Vue/v_ajoutChampionnats.php");
}


function dateFr($date){
    return strftime('%d-%m-%Y',strtotime($date));
}