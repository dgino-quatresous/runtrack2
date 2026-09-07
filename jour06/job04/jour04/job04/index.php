


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
        <input type="text" name="nom">
        <input type="submit">
    </form>
    <table>
        <tr>
            <th>
                <b>Argument</b>
            </th>
            <th>
                <b>Valeurs</b>
            </th>
        </tr>
            
            <?php 
            
            foreach ($_POST as $key => $val) {
                echo "<tr><td>$key</td>";
                echo "<td>$val</td></tr>";
            }
            
            ?>
    </table>
</body>
</html>