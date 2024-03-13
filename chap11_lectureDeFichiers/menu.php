<?php
require 'elements/header.php';
$title = 'Notre menu';
$menu = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menu.tsv');
$lignes = explode(PHP_EOL, $menu);
foreach($lignes as $k => $ligne) {
    $lignes[$k] = explode("\t", trim($ligne));
}
?>

<h1>Menu</h1>

<?php foreach ($lignes as $ligne) :?>
    <?php if (count($ligne) === 1): ?>
        <h2><?= $ligne[0] ?></h2>
    <?php else : ?>
        <div class="row">
            <div class="col-sm 8">
                <p>
                    <strong><?= $ligne[0]; ?></strong><br>
                    <?= $ligne[1]; ?>
                </p>
            </div>
            <div class="col-sm 4">
                <strong><?= number_format(floatval($ligne[2]), 2, ',' , ' '); ?> €</strong>
            </div>
        </div>
    <?php endif ?>
<?php endforeach ?>

<?php
require 'elements/footer.php';
?>