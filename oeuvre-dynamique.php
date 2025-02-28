<?php include('header.php');?>
<main>
<div id="liste-oeuvres">
    <?php 
     // inclure le fichier des oeuvres pour recuperer les données 

     include 'oeuvres.php';

     // utilisation de la boucle pour afficher les oeuvres 

     foreach ($oeuvres as $oeuvre){
        echo "<article class='oeuvres'>";
        echo "<a href='oeuvre.php?id=" . $oeuvre['id'] . "'>"; // lien dynamique basé sur l'ID
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