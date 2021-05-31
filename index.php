<?php 
session_start();

if (isset($_GET['controle']) & isset($_GET['action'])) {
	$controle = $_GET['controle'];
   $action= $_GET['action'];
   }
else { //absence de paramètres : prévoir des valeurs par défaut
   $controle = "c_user"; //Tu mettras ici le nom de ton controleur sans le .php à la place de "c_user"
   $action= "connexion"; // Tu mettras ici le nom de la fonction que tu veux exec à la place de "connexion"
   }
   
//inclure le fichier php de contrôle 
//et lancer la fonction-action issue de ce fichier.	

   require ('./controle/' . $controle . '.php');   
   $action (); 

?>