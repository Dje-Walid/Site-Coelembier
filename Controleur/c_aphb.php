<?php

function isConnected(){
    
    if(isset($_SESSION['profil']['id_user'])){
        return true;
    }
    else{
        return false;
    }
}