<?php include('header.php');?>
<main>
    <?php 
     // inclure le fichier des oeuvres pour recuperer les données 

     include 'oeuvres.php';

     $oeuvre_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

     echo $oeuvre_id 

     ?>
 </main>
 <?php include('footer.php'); ?>