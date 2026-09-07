<?php
$height = 10;
$width = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .border {
            display: flex;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div style="width:<?php echo $width; ?>px; height:<?php echo $height; ?>px"></div>
</body>
</html>