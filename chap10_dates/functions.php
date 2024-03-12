<?php

function nav_item(string $lien, string $titre, string $linkClass =''): string 
{
  $classe = 'nav-item';
  if ($_SERVER['SCRIPT_NAME'] === $lien) {
    $classe .= ' active';
  }
  return <<<HTML
  <li class="$classe">
    <a class="$linkClass" href="$lien">$titre</a>
  </li>
HTML;
}

function nav_menu (string $linkClass = ''): string {
    return
        nav_item('/index.php', 'Accueil', $linkClass) . 
        nav_item('/contact.php', 'Contact', $linkClass);
}

function checkbox (string $name, string $value, array $data): string {
  $attributes = '';
  if (isset($data[$name]) && in_array($value, $data[$name])) {
    $attributes .= 'checked';
  }
  return <<<HTML
  <input type="checkbox" name="{$name}[]" value="$value" $attributes> <!-- Ajout de $attributes ici -->
HTML;
}

function radio (string $name, string $value, array $data): string {
  $attributes = '';
  if (isset($data[$name]) && $value === $data[$name]) {
    $attributes .= 'checked';
  }
  return <<<HTML
  <input type="radio" name="{$name}" value="$value" $attributes> <!-- Ajout de $attributes ici -->
HTML;
}

function dump($variable) {
  echo '<pre>';
  var_dump($variable);
  echo '</pre>';
}

function creneaux_html (array $creneaux) {
  $phrase = [];
  if (empty($creneaux)) {
    return 'Fermé';
  };
  foreach ($creneaux as $creneau) {
    $phrase[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
  }
  return 'Ouvert ' . implode(' et ', $phrase);
}

function in_creneaux(int $heure, array $creneaux): bool {
  foreach ($creneaux as $creneau) {
    $debut = $creneau[0];
    $fin = $creneaux[1];
    if ($heure >= $debut && $heure < $fin) {
      return true;
    }
  }
  return false;
}
?>