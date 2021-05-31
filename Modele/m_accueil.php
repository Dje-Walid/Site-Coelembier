<?php


//Cette fonction sert d'exemple à vous de l'adapter après
function createAcc($nom,$prenom,$email,$pseudo,$mdp){
	require ("./Modele/m_connect.php") ;
   
	$bd = $pdo->prepare("INSERT INTO user(nom, prenom, email,pseudo,mdp,nb_vote,administrateur) VALUES(:nom, :prenom, :email,:login_etu,:pass_etu,0,0)");
    $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    $bd-> bindparam(':nom',$nom);
   
    $bd-> bindparam(':prenom',$prenom);
   
    $bd-> bindparam(':email',$email);
   
    $bd-> bindparam(':login_etu',$pseudo);
   
    $bd-> bindparam(':pass_etu',$mdp);
    
	$bd->execute();
    
}

?>