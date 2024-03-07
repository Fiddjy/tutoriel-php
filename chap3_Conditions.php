<?php 
/* $note = (int)readline('Entrez votre note :');
if ($note > 10) {
    echo 'Bravo vous avez la moyenne';
} elseif ($note === 10) {
    echo 'Vous avez juste la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
} */

$action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)');

switch ($action) {
    case 1 :
        echo 'J\'attaque !';
        break;
    case 2:
        echo 'Je défends';
        break;
    case 3:
        echo 'Je ne fais rien';
        break;
    default:
        echo 'Commande inconnue';
}

/* Le switch case ci-dessus effectue les mêmes actions que les elseif ci-dessous
if ($action === 1) {
    echo 'J\'attaque !';
} elseif ($action === 2) {
    echo 'Je défends';
} elseif ($action === 3) {
    echo 'Je ne fais rien';
} else {
    echo 'Commande inconnue';
}
*/

?>