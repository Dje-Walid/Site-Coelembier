<?php

function allAdherents(){
    require("./modele/m_connect.php");

    $sql= "SELECT * FROM adherents ORDER BY nomAdherent";
   
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