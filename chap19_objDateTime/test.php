<?php
$date = '2014-01-01';
$date2 = '2019-04-01';

$d = new DateTime($date);
$d2 = new DateTime($date2);
$diff = $d->diff($d2, true);
echo "Il y a {$diff->y} années, {$diff->m} mois et {$diff->d} jours de différence";


echo "\n";

$time = strtotime($date);
$time2 = strtotime($date2);
$days = floor(abs($time-$time2) / (24 * 60 * 60));
echo "il y a $days jours de différence";