<?php

session_start();


if (!isset($_SESSION["liste"])) {
    $_SESSION["liste"] = [];
    if ($_POST["prenom"]) != "" {
        $_POST["prenom"] = $_POST["prenom"] + $_SESSION["liste"];
    }
}

if (isset($_POST["reset"])) {

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