<?php

function sql(string $requete, $params = array())
{
    require("./Modele/m_connect.php");

    // On globalise pdo
    //global $pdo;

    // Si on a des paramètres, on les nettoie de toute balise HTML
    if (!empty($params)) {
        foreach ($params as $index => $value) {
            $params[$index] = htmlspecialchars(trim($value));
        }
    }

    // on prépare la requête et on l'exécute avec les éventuels paramètres
    $statement = $pdo->prepare($requete);
    $statement->execute($params);

    // on renvoie l'objet obtenu
    return $statement;
} ?>