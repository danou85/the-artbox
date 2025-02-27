<?php
// Inclure le fichier contenant le tableau des œuvres
include 'oeuvres.php'; // Assurez-vous que ce fichier contient bien le tableau $oeuvres
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie d'Œuvres</title>
</head>
<body>

<h1>Galerie d'Œuvres</h1>

<?php foreach ($oeuvres as $oeuvre) : ?>
    <div>
        <img src="<?= htmlspecialchars($oeuvre['image']); ?>" alt="<?= htmlspecialchars($oeuvre['titre']); ?>" width="200">
        <h2><?= htmlspecialchars($oeuvre['titre']); ?></h2>
        <p><strong>Artiste :</strong> <?= htmlspecialchars($oeuvre['artiste']); ?></p>
        <p><?= htmlspecialchars($oeuvre['description']); ?></p>
        <hr>
    </div>
<?php endforeach; ?>

</body>
</html>
