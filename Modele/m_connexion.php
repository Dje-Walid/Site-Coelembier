<?php


//Cette fonction sert d'exemple à vous de l'adapter après
function createAcc($nom, $prenom, $telephone, $mail ,$mdp){
	require ("./Modele/m_connect.php") ;
   
	$bd = $pdo->prepare("INSERT INTO adherents(nomAdherent, prenomAdeherent,telephoneAdherent, mailAdherent, mdpAdherent, paiementAdherent, isAdmin) VALUES(:nom, :prenom, :telephone, :mail, :mdp, 0, 0)");
    $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    $bd-> bindparam(':nom',$nom);
   
    $bd-> bindparam(':prenom',$prenom);
   
    $bd-> bindparam(':mail',$mail);
   
    $bd-> bindparam(':telephone',$telephone);
   
    $bd-> bindparam(':mdp',$mdp);
    
	$bd->execute();
    
}

function checkUser($mail){

    require("./modele/m_connect.php");
    $sql= "SELECT * FROM adherents WHERE mailAdherent = :mail";
    try{
        $cde_Question  = $pdo->prepare($sql);
        $cde_Question -> bindValue(":mail", $mail);
        $b_Question = $cde_Question ->execute();
      
        $tabUser = array();
        if($b_Question ){
            while($tab = $cde_Question->fetch()){
                $tabUser [] = $tab;
            }
        }
    }
    catch (PDOException $e) {
		echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
		die();
    }
    return $tabUser;

}

?>