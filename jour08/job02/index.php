<?php
if (isset($_POST["reset"])) {
    setcookie("nbvisites", 0, time() + (365 * 24 * 60 * 60));
    header("Location: index.php");
    exit();
}

if (!isset($_COOKIE["nbvisites"])) {
    setcookie("nbvisites", 0, time() + (365 * 24 * 60 * 60));
} else {
    $nbvisites = $_COOKIE["nbvisites"] + 1;
    setcookie("nbvisites", $nbvisites, time() + (365 * 24 * 60 * 60));
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
    <h1>Visites compteur</h1>
    <p>Nombres de visites: <?php echo $_COOKIE["nbvisites"] ?></p>
    <form action="" method="post">
        <button type="submit" name="reset">Reinitialisé le compteur</button>
    </form>
</body>
</html>