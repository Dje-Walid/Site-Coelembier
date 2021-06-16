<?php

function profil(){
    require("./Modele/m_profil.php");
    require("./Vue/v_profil.php");
}

function deconnexion(){
    session_destroy();
}