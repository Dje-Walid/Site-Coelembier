<?php


//Cette fonction sert d'exemple à vous de l'adapter après
function createChampionnat($typeChampionnat,$resultatChampionnat,$clubDomicile,$clubExterieur){
	require ("./Modele/m_connect.php") ;
   
	$bd = $pdo->prepare("INSERT INTO championnats(typeChampionnat, resultatChampionnat, clubDomicile, clubExterieur) VALUES(:typeChampionnat, :resultatChampionnat, :clubDomicile,:clubExterieur)");
    
    $bd-> bindparam(':typeChampionnat',$typeChampionnat);
   
    $bd-> bindparam(':resultatChampionnat',$resultatChampionnat);
   
    $bd-> bindparam(':clubDomicile',$clubDomicile);
   
    $bd-> bindparam(':clubExterieur',$clubExterieur);
    
	$bd->execute();
    
}

function allChamp(){
    require("./modele/m_connect.php");

    $sql= "SELECT * FROM tournois ORDER BY dateTournoi DESC";
   
    try{
        $cde_Question  = $pdo->prepare($sql);
        $b_Question = $cde_Question ->execute();
      
        $tabChampionnats = array();
        if($b_Question ){
            while($tab = $cde_Question->fetch()){
                $tabChampionnats [] = $tab;

            }
            
        }
    }
    catch (PDOException $e) {
        echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
        die();
    }
    return $tabChampionnats;
}

function allJoueur($id){
    require("./modele/m_connect.php");

    $sql= "SELECT * FROM participer WHERE idTournoi=:id ORDER BY pointGlobal DESC";
   
    try{
        $cde_Question  = $pdo->prepare($sql);
        $cde_Question-> bindparam(':id',$id);

        $b_Question = $cde_Question ->execute();
      
        $tabJoueurs = array();
        if($b_Question ){
            while($tab = $cde_Question->fetch()){
                $tabJoueurs [] = $tab;

            }
            
        }
    }
    catch (PDOException $e) {
        echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
        die();
    }
    return $tabJoueurs;
}

function getInfoJoueur($id){
    require("./modele/m_connect.php");
    $sql= "SELECT * FROM adherents WHERE idAdherent=:id";
   
    try{
        $cde_Question  = $pdo->prepare($sql);
        $cde_Question -> bindValue(":id",$id);
        $b_Question = $cde_Question ->execute();
      
        $tabAdherent = array();
        if($b_Question ){
            while($tab = $cde_Question->fetch()){
                $tabAdherent [] = $tab;

            }
            
        }
    }
    catch (PDOException $e) {
		echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
		die();
    }
    return $tabAdherent;
}
?>