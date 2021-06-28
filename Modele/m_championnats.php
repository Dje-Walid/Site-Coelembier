<?php

function createTournoi($idChamp, $dateTournoi, $typeCompet){
    require ("./Modele/m_connect.php") ;
   
	$bd = $pdo->prepare("INSERT INTO tournois(typeTournoi, dateTournoi, idChampionnat) VALUES(:typeCompet, :dateTournoi, :idChamp)");
    
    $bd-> bindparam(':typeCompet',$typeCompet);
    $bd-> bindparam(':dateTournoi',$dateTournoi);
    $bd-> bindparam(':idChamp',$idChamp);
    
	$bd->execute();
}

function getIdChamp($nomChamp){
    require ("./Modele/m_connect.php") ;

    $sql = "SELECT idChampionnat FROM championnats WHERE nomChampionnat = :nomChampionnat";

    try{
        $cde_Question  = $pdo->prepare($sql);
        $cde_Question-> bindparam(':nomChampionnat',$nomChamp);

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


//Cette fonction sert d'exemple à vous de l'adapter après
function createChampionnat($nomChamp, $dateTournoi, $typeCompet){
	require ("./Modele/m_connect.php") ;
   
	$bd = $pdo->prepare("INSERT INTO championnats(typeChampionnat, nomChampionnat) VALUES(1, :nomChampionnat)");
    
    $bd-> bindparam(':nomChampionnat',$nomChamp);
    
	$bd->execute();

    $idChamp = getIdChamp($nomChamp);

    createTournoi($idChamp[0]["idChampionnat"], $dateTournoi, $typeCompet);
}

function allChampAjout(){
    require("./modele/m_connect.php");

    $sql= "SELECT * FROM championnats";
   
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