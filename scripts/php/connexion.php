<?php

function db() {
    $db = "consommation";
    $id = "root";
    $mdp = "";

    try {

        $db = new PDO('mysql:host=localhost;dbname='.$db.';', $id, $mdp, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $db;

    } catch (Exception $e) {

        die('Erreur' . $e->getMessage());
        return;

    }
}

?>