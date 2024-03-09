<?php
/* $chiffre = null;

while($chiffre !== 10) {
    $chiffre = (int)readline('Entrez un nombre entre 1 et 20 : ');
}

echo 'Bravo ! Vous avez gagné !';
*/

// "\n permet de faire un saut de ligne"
$notes = [10, 15, 16] ;

/* for ($i = 0; $i < 3; $i++) {
    echo '- ' . $notes[$i] . "\n";
} */

// Pour chaque notes en tant que note
foreach ($notes as $note) {
    echo "- $note \n";
}

$eleves = [
    'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
    'cm1' => ['Emilie', 'Marcelin']
];
foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe : \n";
    foreach ($listEleves as $eleve) {
        echo "- $eleve\n";
    };
}
?>