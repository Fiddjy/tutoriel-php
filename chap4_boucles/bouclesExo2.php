<?php
/*
on veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
on demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
*/

// On demande à l'utilisateur de rentrer un créneau
    // on demande l'heure de début
    // on demande l'heure de fin
    // on vérifier que l'heure de début est < à l'heure de fin
    // on demande si on veut ajouter un nouveau créneau (o/n)
// on demande à l'utilisateur de rentrer une heure
// on affiche l'état d'ouverture du magasin

$creneaux = [];
while (true) {
    $debut = (int)readline('Heure d\'ouverture :');
    $fin = (int)readline('Heure de fermeture :');
    if ($debut >= $fin) {
        echo 'Le créneau ne peut pas être enregistré car l\'heure de début ($debut) est supérieur à l\'heure de fermeture ($fin).';
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline('Voulez vous enregistrer un nouveau créneau ? (o/n)');
        if ($action === 'n') {
            break;
        };
    };
}

echo 'Le magasin est ouvert de';
foreach($creneaux as $k => $creneau) {
    if ($k > 0) {
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}";
}

$heure = (int)readline("A quelle heure voulez vous visiter le magasin ?");
$creneauTrouve = false;

foreach($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
    }
}

if ($creneauTrouve) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Désolé, le magasin sera fermé :(';
}