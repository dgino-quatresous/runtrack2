<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="test01">
        <input type="submit">
    </form>
</body>
</html>

<?php
$counter = 0;
foreach ($_POST as $post) {
    $counter++;
}

echo "Le nombre d'argument POST envoyé est: " . $counter;


?>