<?php
require 'header.php';
// Checkbox
$parfums =  [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
// Radio
$cornets = [
    'Pot' => 2,
    'Cornet' => 3,
];
// Checkbox
$supplements = [
    'Pépite de chocolat' => 1,
    'Chantilly' => 0.5
];
$title = "Composez votre glace";
$ingredients = [];
$total = 0;
foreach(['parfum', 'supplement', 'cornet'] as $name) {
    if (isset($_GET[$name])) {
        $liste = $name . 's';
        $choix = $_GET[$name];
        if (is_array($choix)) {
            foreach ($choix as $value) {
                if (isset($$liste[$value])) {
                    $ingredients[] = $value;
                    $total += $$liste[$value];
                }
            }
        } else {
            if (isset($$liste[$choix])) {
                $ingredients[] = $choix;
                $total += $$liste[$choix];
            }
        }
    }
}
?>

<h1>Composez votre glace</h1>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Votre glace</h5>
                <ul>
                    <?php foreach($ingredients as $ingredient): ?>
                        <li><?= $ingredient ?></li>
                    <?php endforeach; ?>
                </ul>
                <p>
                    <strong>Prix : </strong><?= $total ?> €
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <form action="/jeu2.php" method="GET">
            <h2>Choisissez vos parfums</h2>
            <?php foreach($parfums as $parfum => $prix): ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('parfum', $parfum, $_GET) ?>
                        <?= $parfum ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>

            <h2>Choisissez votre contenant</h2>
            <?php foreach($cornets as $cornet => $prix): ?>
                <div class="radio">
                    <label>
                        <?= radio('cornet', $cornet, $_GET) ?>
                        <?= $cornet ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>

            <h2>Choisissez vos suppléments</h2>
            <?php foreach($supplements as $supplement => $prix): ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('supplement', $supplement, $_GET) ?>
                        <?= $supplement ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach ?>

            <button type="submit" class="btn btn-primary">Composer ma glace</button>
        </form>
    </div>
</div>

<?php require 'footer.php'; ?>