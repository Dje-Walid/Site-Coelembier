<?php

function connexion(){
    require("./Modele/m_connexion.php");
    require("./Vue/v_connexion.php");
}

function userExist(){
    require("./Modele/m_connexion.php");

    $mail = isset($_POST['mailCo'])?($_POST['mailCo']):'';
    $mdp = isset($_POST['mdpCo'])?($_POST['mdpCo']):'';

    if(!is_null(checkUser($mail, $mdp))){
        $_SESSION['user'] = checkUser($mail, $mdp);
        if(password_verify($mdp, $_SESSION['user']['mdpAdherent'])){
            require("./Vue/v_accueil.php");
        }
        else{
            $msg = "Votre pseudo ou votre mot de passe n'est pas valide";
            require("./Vue/v_connexion.php");
        }
    }
    else{
        $msg = "Votre pseudo ou votre mot de passe n'est pas valide";
        require("./Vue/v_connexion.php");
    }

}

function userCrea(){
    require("./Modele/m_connexion.php");

    /*$nom = isset($_POST['nom'])?($_POST['nom']):'';
    $prenom = isset($_POST['prenom'])?($_POST['prenom']):'';
    $email = isset($_POST['email'])?($_POST['email']):'';
    $username = isset($_POST['pseudo'])?($_POST['pseudo']):'';
    $mdp = isset($_POST['mdp'])?($_POST['mdp']):'';*/


    //createAcc($_POST[Nom]);
}
