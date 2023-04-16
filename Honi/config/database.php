<?php

    $host = "localhost";
    $db = "honi";
    $user = "root";
    $pass = "";

    try {
        $database = new PDO("mysql:host=localhost;dbname=honi", $user, $pass);
    } catch (PDOException $ex) {
        die("Erreur: " . $ex->getMessage());
    }

?>