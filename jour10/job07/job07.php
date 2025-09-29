<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Superficie Totale</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['superficie_totale'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}


?>