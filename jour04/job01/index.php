<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="test01">
        <input type="submit">
    </form>
</body>
</html>

<?php
$counter = 0;
foreach ($_GET as $get) {
    $counter++;
}

echo "Le nombre d'argument GET envoyé est: " . $counter;
?>