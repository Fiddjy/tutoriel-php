<?php 
require 'header.php'; 
$title = "Nous contacter";
date_default_timezone_set('Europe/Paris');
$heure = (int)date('G');
$creneaux = CRENEAUX[date('N') -1];
$ouvert = in_creneaux($heure, $creneaux);
$color = 'green';
// $color = $ouvert ? 'green' : 'red'   <= fonction ternaire
if (!$ouvert) {
    $color = 'red';
}
?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contacter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laboriosam adipisci illum, quas accusamus earum numquam debitis rem beatae ipsa excepturi. Itaque libero amet magni officiis error eveniet, ea magnam.</p>
    </div>
    <div class="col-md-4">
        <h2>Horaires d'ouverture</h2>
        <?php if($ouvert) : ?>
            <div class="alert alert-success">
                Le magasin est ouvert
            </div>
        <?php else : ?>
            <div class="alert alert-danger">
                Le magasin est fermé
            </div>
        <?php endif ?>
        <ul>
            <?php foreach(JOURS as $k => $jour): ?>
                <li <?php if ($k + 1 === (int)date('N')): ?> style="color:<?= $color ?>" <?php endif ?>>
                    <strong><?= $jour ?> </strong> :
                    <?= creneaux_html(CRENEAUX[$k]) ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<?php require 'footer.php';?>