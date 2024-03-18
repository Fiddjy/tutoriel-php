<?php 
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.csv';
$ressource = fopen($fichier, 'r+');
$k = 0;
while ($line = fgets($ressource)) {
    $k++;
    if($k == 1) {
        fwrite($ressource, 'Salut les gens');
        break;
    }
}
fclose($ressource);
?>