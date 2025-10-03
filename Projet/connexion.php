<?php

require "src/header.php";
require_once 'src/db.php';
try {
    require_once 'src/db.php';
    $connection = connect_pdo();

    $check_sql = 'SELECT id FROM utilisateurs WHERE login = ?';
    $check_stmt = $connection->prepare($check_sql);
    $check_stmt->execute([$login]);

    if ($check_stmt->rowCount() > 0) {
        $error_message = "Ce nom d'utilisateur existe déjà.";
    }else{
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utiliseurs(login, nom, prenom, password) VALUES (?, ?, ?, ?)";
        $inscription = $connection->prepare($sql);
        $inscription->execute([$login, $nom, $prenom, $password]);


        $success_message = "Inscription réussie! Redirection vers la page de connexion...";
        header("location:connexion.php");
    }}catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            $error_message = "Ce nom d'utilisateur est déjà utilisé!";
        }else{
            $error_message = "Erreur lors de l'inscription: " . $e->getMessage();
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="login" id="login" placeholder="Nom d'utilisateur" required>
        <input type="text" name="password" id="password" placeholder="Mot de passe" required>
    </form>
</body>
</html>


<?php

function connection_verification() {
    if ($_POST["login"] == $login) {
        if ($_POST["password"] == $password) {
            $connecte = true;
            
        }else{
            echo "Mot de passe invalide.";
        }
    }else{
        echo "Nom d'utilisateur invalide.";
    }
}

?>