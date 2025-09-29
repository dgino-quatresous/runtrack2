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

    $sql = "SELECT AVG(capacite) as capacite_moyenne FROM salles";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Capacité</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['capacite_moyenne'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}


?>