<?php
    require("./Modele/m_aphb.php");

//Cette fonction sert d'exemple à vous de l'adapter après
function createAcc($nom, $prenom, $telephone, $mail ,$mdp){

    try{
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);

        /*$test = sql('SHOW DATABASES');
        var_dump($test->fetchAll());*/

        sql("INSERT INTO adherents (nomAdherent, prenomAdherent, telephoneAdherent, mailAdherent, mdpAdherent, paiementAdherent, isAdmin) VALUES (:nom, :prenom, :telephone, :mail, :mdp, 0, 0)", array(
            'nom' => $nom,
            'prenom' => $prenom,
            'telephone' => $telephone,
            'mail' => $mail,
            'mdp' => $mdp
        ));
        
        $_SESSION['messages'][] = 'Inscription réussie. Bienvenue! ';

        $_SESSION['user'] = checkUser($mail);
    }
    catch (PDOException $e){
        echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
		die();
    }
}

function checkUser($mail){

    $statement = sql('SELECT * FROM adherents WHERE mailAdherent=:mail',array('mail' => $mail));
    return ($statement->fetch());

}

?>