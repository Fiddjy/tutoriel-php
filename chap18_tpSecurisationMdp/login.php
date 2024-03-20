<?php 

$erreur = null;
// Pour générer le mot de passe crypté, dans le terminal : 
// php -a
// echo password_hash('Doe', PASSWORD_DEFAULT);
$password = '$2y$10$lOz5bMWcW8Vm.QZEsk4PweI.4PTPVb.uVKS1SQ2WzORLtXgg2CHc2';
if(!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'John' && password_verify($_POST['motdepasse'], $password)) {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /dashboard.php');
        exit();
    } else {
        $erreur = "Identifiants incorrects";
    } 
}

require 'functions/auth.php';
if(est_connecte()) {
    header('Location: /dashboard.php');
    exit();
}

require 'elements/header.php' ;
$title = 'Se connecter';
?>

<?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php endif ?> 

<form action="" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="pseudo" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="motdepasse" placeholder="Votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php require 'elements/footer.php' ?>