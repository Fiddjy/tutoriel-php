<?php 
require 'header.php'; 
$title = "Nous contacter";
date_default_timezone_set('Europe/Paris');
$heure = (int)($_GET['heure'] ?? date('G')); // récupère ll'heure de l'url OU prends l'heure actuelle
$jour = (int)($_GET['jour'] ?? date('N') -1);
$creneaux = CRENEAUX[$jour];
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
                Le magasin sera ouvert
            </div>
        <?php else : ?>
            <div class="alert alert-danger">
                Le magasin sera fermé
            </div>
        <?php endif ?>

        <form action="" method="GET">
            <div class="form-group">
                <?= select('jour', $jour, JOURS); ?>
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="heure" value="<?= $heure ?>">
            </div>
            <button class="btn btn-primary" type="submit">Voir si le magasin est ouvert</button>
        </form>

        <ul>
            <?php foreach(JOURS as $k => $jour): ?>
                <li>
                    <strong><?= $jour ?> </strong> :
                    <?= creneaux_html(CRENEAUX[$k]) ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<?php require 'footer.php';?>