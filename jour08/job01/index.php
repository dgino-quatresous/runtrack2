<?php

session_start();


if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 0;
} else {
    $_SESSION["nbvisites"]++;
}

if (isset($_POST["reset"])) {
    $_SESSION["nbvisites"] = 0;
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
    <p>Nombres de visites: <?php echo $_SESSION["nbvisites"] ?></p>
    <form action="" method="post">
        <button type="submit" name="reset">Reinitialisé le compteur</button>
    </form>
</body>
</html>