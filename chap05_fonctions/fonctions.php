<?php
// Retrouver la documentation sur https://www.php.net/manual/fr/

// Faire rentrer un mot à l'utilisateur, lui indiquer si son mot est un palindrome
/*
$mot = readline('Veuillez rentrer un mot :');
$reverse = strtolower(strrev($mot));
if (strtolower($mot) == $reverse) {
    echo 'Ce mot est un palindrome';
} else {
    echo 'Ce mot n\'est pas un palindrome';
}
*/

while(true) {
    $mot = readline('Entrez votre mot : ');
    if ($mot == '') {
        exit('Fin du programme');
    }
    $reverse = strtolower(strrev($mot));
    if(strtolower($mot) == $reverse) {
        echo "Ce mot est un palindrome \n";
    } else {
        echo "Ce mot n'est pas un palindrome \n";
    };
}

/*
// Ajouter des notes à un élève + Calculer la moyenne d'un élève
$notes = [10, 20, 13];
array_push($notes, 16, 9);
$sum = array_sum($notes);
$count = count($notes);
echo "Vous avez " . round($sum / $count, 2) . " de moyenne.";
//Réarranger un tableau
$noteReversed = array_reverse($notes);
print_r($notes);
print_r($noteReversed);
*/
?>