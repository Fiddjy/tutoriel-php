<?php
/*
- On demande à l'utilisateur de rentrer une note ou de taper "fin"
- Chaque note est sauvegardée dans un tableau $notes (pensez notes[])
- A la fin, on affiche le tableau de note sous forme de liste 
*/

/*tant que l'utilisateur ne tape pas 'fin'
    on ajoute la note tapée au tableau notes
pour chaque note dans notes
    on affiche "- note"
*/

$notes = [];
$action = null;

while ($action !== 'fin') {
    $action = readline('Entrez une nouvelle note (ou \'fin\' pour terminer la saisie) :');
    if ($action !== 'fin') {
        $notes[] = (int)$action;
    }
}

foreach ($notes as $note) {
    echo "- $note\n";
}
?>

