<?php

function acc(){
    require("./modele/m_user.php");
    require("./modele/m_topic.php");
    $id_user = $_SESSION['profil']['id_user'];
    $topic= allTopics();
    require("./vues/v_accueil.php");