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

    $sql = "SELECT * FROM salles ORDER BY capacite ASC";
    $stmt = $pdo->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nom</th><th>ID de L'étage</th><th>Capacité</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['id_etages'] . "</td>";
        echo "<td>" . $row['capacite'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}


?>