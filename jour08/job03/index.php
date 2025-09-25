<?php

session_start();


if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["prenom"] = "";
} else {
    $_SESSION["prenom"]++;
}

if (isset($_POST["reset"])) {
    $_SESSION["prenom"] = "";
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
    <form action="" method="post">
    <input type="text" name="prenom">
    <input type="submit">
    </form>
    <h3>Listes d'utilisateurs</h3>
    <p><?php echo $_SESSION["prenom"] ?></p>
    <form action="" method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>