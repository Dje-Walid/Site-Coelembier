var mois;
var annee;

function setMois(elmnt){
    mois = elmnt.value;
}

function setAnnee(elmnt){
    annee = elmnt.value;
}

function selectChampionnat(elmnt){
    
    var allChamps = document.querySelectorAll("table");
    var champ;

    for(var i = 0; i < allChamps.length; i++) {

        champ = allChamps[i];
        //champ.style.display = "inline";

        if(champ.className === elmnt.value) {

            if(champ.id.slice(3,5) === mois && champ.id.slice(6,10) === annee){
                champ.style.display = "inline";
            }
            else{
                champ.style.display = "none";
            }
        }
        else {
            champ.style.display = "none";
        }
    }
}