<?php

function championnat(){
    require("./Modele/m_championnats.php");
    $championnats = allChamp();
    require("./Vue/v_championnats.php");
}

function ajoutChampionnat(){
    require("./Modele/m_championnats.php");
    $championnats = allChampAjout();
    require("./Vue/v_ajoutChampionnats.php");
}


function dateFr($date){
    return strftime('%d-%m-%Y',strtotime($date));
}

function creaChampionnat($nomChampionnat, $dateTournoi, $typeTournoi){
    var_dump("OUIU");

}

function creaChampionnatExist(){

}