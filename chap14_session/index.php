<?php  
session_start();
$_SESSION['user'] = [
  'username' => 'John',
  'password' => '0000'
]; // Se connecter avec le login john et le mdp 0000
// unset($_SESSION['user']); // Se déconnecter
$title = "Page d'accueil";
require 'elements/header.php'; 

?>

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

<?php require 'elements/footer.php'; ?>
