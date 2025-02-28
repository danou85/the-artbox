<?php include('header.php'); ?>
<main>
    <div id="liste-oeuvres">
        <?php 
        // Inclure le fichier des œuvres pour récupérer les données
        include 'oeuvres.php';

        // Utilisation de la boucle foreach pour afficher chaque œuvre
        foreach ($oeuvres as $oeuvre) {
            echo "<article class='oeuvre'>";
            echo "<a href='oeuvre-".$oeuvre['id'].".php'>"; // lien dynamique basé sur l'ID
            echo "<img src='" . htmlspecialchars($oeuvre['image']) . "' alt='" . htmlspecialchars($oeuvre['titre']) . "' />";
            echo "<h2>" . htmlspecialchars($oeuvre['titre']) . "</h2>";
            echo "<p class='description'>" . htmlspecialchars($oeuvre['artiste']) . "</p>";
            echo "</a>";
            echo "</article>";
        }
        ?>
    </div>
</main>
<?php include('footer.php'); ?>