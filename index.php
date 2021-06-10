<?php 
session_start();

if (isset($_GET['controle']) & isset($_GET['action'])) {
	$controle = $_GET['controle'];
   $action= $_GET['action'];
   }
else { //absence de paramètres : prévoir des valeurs par défaut
   $controle = "c_accueil"; //Tu mettras ici le nom de ton controleur sans le .php à la place de "c_user"
   $action= "acc"; // Tu mettras ici le nom de la fonction que tu veux exec à la place de "connexion"
   }
   
//inclure le fichier php de contrôle 
//et lancer la fonction-action issue de ce fichier.	
  
   require ('./Controleur/' . $controle . '.php');   
   require ('./Vue/v_header.php');
   $action (); 
   require ('./Vue/v_footer.php');

?>