var mois;
var annee;

function setMois(elmnt){
    mois = elmnt.value;
}

function setAnnee(elmnt){
    annee = elmnt.value;
}

function selectChampionnat(elmnt){
    
    var allChamps = document.querySelectorAll("#table img");
    var champ;

    var allH1 = document.querySelectorAll("h1");
    var H1;

    // Va chercher tous les tableaux et faire le tri selon la date et le type de tournoi
    for(var i = 0; i < allChamps.length; i++) {

        champ = allChamps[i];
        //DEBUG
        /*champ.style.display = "inline";
        console.log(i);
        console.log(champ.id.slice(3,5));
        console.log(champ.id.slice(6,10));*/

        if(champ.className === elmnt.value) {

            if(champ.id.slice(3,5) === mois && champ.id.slice(6,10) === annee){
                champ.style.display = "initial";
                champ.style.borderColor = "white";
            }
            else{
                champ.style.display = "none";
            }
        }
        else {
            champ.style.display = "none";
        }
    }

    // Va chercher tous les H1 et faire le tri selon la date et le type de tournoi en prenant soin de ne pas supprimer le H1 du Header
    for(i = 0; i < allH1.length; i++) {

        H1 = allH1[i];
        //DEBUG
        /*H1.style.display = "inline";
        console.log(i);
        console.log(H1.id.slice(3,5));
        console.log(H1.id.slice(6,10));*/

        if(H1.className === elmnt.value) {

            if(H1.id.slice(3,5) === mois && H1.id.slice(6,10) === annee){
                H1.style.display = "block";
            }
            else{
                H1.style.display = "none";
            }
        }
        else {

            //Pour ne pas supprimer le H1 du Header
            if(H1.id != "nePasSupp")
            {
                H1.style.display = "none";
            }
        }
    }
}