<?php 
require 'header.php'; 
$title = "Nous contacter";
$nav = "contact";
$creneaux = creneaux_html(CRENEAUX);
?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contacter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laboriosam adipisci illum, quas accusamus earum numquam debitis rem beatae ipsa excepturi. Itaque libero amet magni officiis error eveniet, ea magnam.</p>
    </div>
    <div class="col-md-4">
        <?= $creneaux ?>
    </div>
</div>

<?php require 'footer.php';?>