<?php
require 'elements/header.php';

$age = null;

if(!empty($_POST['birthday'])) {
    setcookie('birthday', $_POST['birthday']);
    $_COOKIE['birthday'] = $_POST['birthday'];
}

if(!empty($_COOKIE['birthday'])) {
    $birthday = (int)$_COOKIE['birthday'];
    $age = (int)date('Y') - $birthday;
}

?>

<?php if($age >= 18): ?>
    <h1>Du contenu réservé aux adultes</h1>
<?php elseif ($age !== null): ?>
    <div class="alert alert-danger">Vous n'avez pas l'age requipe pour voir le contenu</div>
<?php else : ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="birthday">Section réservée pour les adultes. Rentrez votre année de naissance</label>
            <select name="birthday" id="birthday" class="form-control">
                <?php for($i = 2010; $i > 1919; $i--): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
<?php endif ?>

<?php require 'elements/footer.php'; ?>