<?php 
// Déclaration de variables
$prenom = 'Marc';
$nom = 'Doe';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1 + $note2) /2;
// Concaténation de chaines de caractères
echo 'Bonjour ' . $prenom . ' ' . $nom . ' vous avez eu ' . $moyenne . ' de moyenne';
echo "Bonjour $prenom $nom, vous avez eu $moyenne de moyenne.";
?>