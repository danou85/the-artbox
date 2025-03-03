<?php
require_once 'header.php';
require_once 'oeuvres.php';

// recuperer l'ID de l'oeuvre depuis url 
$oeuvre_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

//Trouver l'oeuvre correspondante a l'ID 
$oeuvre = null;
foreach ($oeuvres as $item) {
    if ($item['id'] == $oeuvre_id) {
        $oeuvre = $item;
        break;
    }
}
// Verifier si l'oeuvre a ete trouver 

if (!$oeuvre) {
    header("Location: index.php"); // Redirection en cas d'oeuvre inexistante 
    exit;
}

?>
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo '/the-artbox/' . htmlspecialchars($oeuvre['image']); ?>" alt="<?php echo htmlspecialchars($oeuvre['titre']); ?>">
        </div>
        <div id="contenu-oeuvre">
        <h1><?php echo htmlspecialchars($oeuvre['titre']); ?></h1>
            <p class="description"><?php echo htmlspecialchars($oeuvre['artiste']); ?></p>
            <p class="description-complete">
                <?php echo nl2br(htmlspecialchars($oeuvre['description'])); ?>
            </p>
        </div>
    </article>
</main>

<?php require_once 'footer.php';?>