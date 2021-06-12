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

?>