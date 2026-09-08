<?php
$styles = ['style1', 'style2', 'style3'];
$selectedStyle = $_POST['style'] ?? 'style1';

if (!in_array($selectedStyle, $styles, true)) {
    $selectedStyle = 'style1';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du style</title>
    <link rel="stylesheet" href="<?= $selectedStyle ?>.css">
</head>

<body>
    <main class="page">
        <form action="" method="post" class="style-form">
            <h1>Choisissez un style</h1>
            <label for="style">Style du formulaire</label>
            <select id="style" name="style">
                <?php foreach ($styles as $style): ?>
                    <option value="<?= $style ?>" <?= $selectedStyle === $style ? 'selected' : '' ?>>
                        <?= ucfirst($style) ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Appliquer le style</button>
        </form>
    </main>
</body>

</html>