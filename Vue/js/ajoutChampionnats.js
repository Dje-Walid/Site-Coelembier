var idChamp;
var nomChamp;
var type;
var date;

// TODO: Rendre l'affichage plus pratique et plus court grace a une fonction
//#region AFFICHAGE DES VUES
function hideDiv(){

    var champ = document.querySelector("#Championnat");
    champ.style.display = "inline";

    document.querySelector("#newChamp").style.display ="none";
    document.querySelector("#existChamp").style.display ="none";

    var tournoi = document.querySelector("#Tournoi");
    tournoi.style.display = "none";

}

function newChamp(){
    document.querySelector("#newChamp").style.display ="inline";
    document.querySelector("#existChamp").style.display ="none";
}

function existChamp(){
    document.querySelector("#newChamp").style.display ="none";
    document.querySelector("#existChamp").style.display ="inline";
}

//#endregion

//Va stocker l'id du championnat le temps d'avancer dans le formulaire
function setIdChamp(elmnt){
    idChamp = elmnt.value;
}

//Récupère le type de tournois "doublette, triplette, tete"
function setType(elmnt){
    type = elmnt.value;
}

//Avance à l'étape 2 et stock le nom du championnat si il est nouveau
function nextNewChamp(elmnt){
    nomChamp = document.querySelector("#newChampInput").value;
    document.querySelector(".cercle2").style.background = "#03224C";
    document.querySelector(".cercle2").style.borderColor = "#03224C";
    document.querySelector(".acercle2").style.color = "white";
    document.querySelector("progress").value = 100;
    console.log(document.querySelector("#newChampInput").value);


    // TODO: Utiliser la fonction d'affichage
    var champ = document.querySelector("#Championnat");
    champ.style.display = "none";

    var tournoi = document.querySelector("#Tournoi");
    tournoi.style.display = "inline";

    document.querySelector("#nomChampInputPHP").value = nomChamp;
    document.querySelector("#idChampInput").value = idChamp;

}
