<?php

require("./Modele/m_connexion.php");

function connexion(){
    require("./Vue/v_connexion.php");
}

function userExist(){

    extract($_POST);

    $_SESSION['user'] = checkUser($mailCo);

    $user = checkUser($mailCo);

    var_dump($user['mailAdherent']);

    if($user){

        if( password_verify($mdpCo, $user['password']) ){
            $_SESSION['user'] = $user;
            require("./Vue/v_accueil.php");
        }
        else{
            $msg = "Votre mail ou votre mot de passe n'est pas bon";
            require("./Vue/v_connexion.php");
        }
    }

}

function userCrea(){
    
    extract($_POST);

    createAcc($nomIns, $prenomIns, $telephoneIns, $mailIns, $mdpConfIns);

    //$_SESSION['user'] = $profil;

    if(isset($_SESSION['user'])){
        var_dump($_SESSION['user']['prenomAdherent'] . "ICI");
        require("./Vue/v_accueil.php");
    }
    else{
        $msg = "L'adresse mail existe déjà";
        require("./Vue/v_connexion.php");
    }
}
