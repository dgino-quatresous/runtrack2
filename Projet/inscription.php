<?php
$error = '';
session_start();
// génère un token CSRF simple
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf_token'];

require 'src/header.php';
if ($_SERVER['REQUEST_METHOD'] === "POST") {
$nom = trim($_POST['nom'] ?? '');
$prenom = trim($_POST['prenom'] ?? '');
$login = trim($_POST['login'] ?? '');
$password = trim($_POST['password'] ?? '');
$passwordConfirmation = trim($_POST['passwordConfirmation'] ?? '');

if (empty($nom) || empty($password) || empty($prenom) || empty($login)) {
    $error = 'Tous les champs sont requis.';
}elseif ($password !== $passwordConfirmation) {
    $error = 'Les mots de passe ne correspondent pas.';
}elseif(strlen($password) < 8) {
    $error = 'Mot de passe trop court (min 8 caractères).';
}else{
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
    <h1>Créer votre compte</h1>
    <form action="" method="post">
        <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
        <input type="text" name="nom" id="nom" placeholder="Nom" required>
        <input type="text" name="login" id="login" placeholder="Nom d'utilisateur" required>
        <input type="password" name="password" id="password" placeholder="Mot de passe" required>
        <input type="password" name="passwordConfirmation" id="passwordConfirmation" placeholder="Confirmer le mot de passe" required>
        <input type="submit">
    </form>
    <div><?php echo $error; ?></div>
</body>
</html>