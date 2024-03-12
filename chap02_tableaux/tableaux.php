<?php 
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc', 
    'notes' => [10, 20 ,15]
];
// Modif de la clé 'prénom'
$eleve['prenom'] = 'Jean';
// Ajout d'un note à la fin du tableau
$eleve['notes'][] = 16;
echo $eleve['prenom'] . ' ' . $eleve['nom'];
print_r($eleve['notes']);

//Interpolation de 3 tableaux
$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'Marc', 
        'notes' => [10, 20 ,15]
    ],
    [
        'nom' => 'Doe',
        'prenom' => 'Jane', 
        'notes' => [12, 15, 17]
    ]
];
// Dans le tableau classe, je veux récupérer; sur le 2e élève, sa note numéro 2
echo $classe[1]['notes'][1];
?>