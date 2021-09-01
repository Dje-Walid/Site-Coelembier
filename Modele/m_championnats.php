<?php

function createTournoi($dateTournoi, $typeCompet, $srcTournoi){
    require ("./Modele/m_connect.php") ;
   
	$bd = $pdo->prepare("INSERT INTO tournois(typeTournoi, dateTournoi, srcTournoi) VALUES(:typeCompet, :dateTournoi, :srcTournoi)");
    
    $bd-> bindparam(':typeCompet',$typeCompet);
    $bd-> bindparam(':dateTournoi',$dateTournoi);
    $bd-> bindparam(':srcTournoi',$srcTournoi);
    
	$bd->execute();
}

function dropTournoi($idTournoi){
    require ("./Modele/m_connect.php") ;
   
	$bd = $pdo->prepare("DELETE FROM tournois WHERE idTournoi = :idTournoi");

    $bd-> bindparam(':idTournoi',$idTournoi);

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