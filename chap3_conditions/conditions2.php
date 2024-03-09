<?php
$heure = (int)readline('Entrez une heure : ');
if ((9 < $heure && $heure < 12) || (14 < $heure && $heure < 17)) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Le magasin sera ouvert';
}

/* Vrai && Vrai = Vrai
Vrai && Faux = Faux
Faux && Faux = Faux

Vrai || Vrai = Vrai
Vrai || Faux = Vrai
Faux || Faux = Faux
*/
?>