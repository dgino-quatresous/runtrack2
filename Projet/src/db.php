<?php

function connect_pdo() {

try {

    $pdo = new PDO("mysql:host=localhost;dbname=moduleconnexion", "root", "");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
}
?>