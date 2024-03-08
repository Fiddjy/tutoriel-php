<?php

/* 
function nom_de_fonction (string $param1, string $param2 = "valeur par défaut"): string
{
    return "Valeur de retour";
}
*/


function repondre_oui_non(string $phrase): bool {
    while (true) {
        $reponse = readline($phrase . " - (o)ui/(n)on");
        if ($reponse === "o") {
            return true;
        } elseif ($reponse === "n") {
            return false;
        } 
    }
}
//$resultat = repondre_oui_non('Voulez vous continuer ?');



function demander_creneau($phrase = 'Veuillez entrer votre creneau') {
    echo $phrase . "\n";
    while (true) {
        $ouverture = (int)readline("Heure d'ouverture : ");
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    }
    while (true) {
        $fermeture = (int)readline("Heure de fermeture : ");
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
            break;
        }
    }
    return [$ouverture, $fermeture];
}
//$creneau = demander_creneau();

function demander_creneaux (string $phrase = "Veuillez entrer vos créneaux"): array {
    $creneaux = [];
    $continuer = true;
    while ($continuer) {
        $creneaux[] = demander_creneau();
        $continuer = repondre_oui_non('Voulez vous continuer ?');
    }
    return $creneaux;
}

$creneaux = demander_creneaux('Entrez vos créneaux');
var_dump($creneaux);
?>