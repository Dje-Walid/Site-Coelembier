<?php
    //Ce modèle permet de se connecter à la base de données, il faudra l'appeler à chaque fois que vous voulez faire une requete dans le modele.
	$hostname = "localhost";	//ou localhosta
	$base= "aphb";
	$port = "3306";           // Le nom de votre BDD à la place de "f4speak"
	$loginBD= "root";	
	$passBD="";         // ou "root"
try {

	$pdo = new PDO ("mysql:host=$hostname; port=$port; dbname=$base", "$loginBD", "$passBD",
	array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
	);
	//die('OK connexion');
}

catch (PDOException $e) {
	die  ("Echec de connexion : " . utf8_encode($e->getMessage()) . "\n");
}

?>