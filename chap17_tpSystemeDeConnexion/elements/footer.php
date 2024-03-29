</main><!-- /.container -->

<footer>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <?php
                require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php'; 
                ajouter_vue();
                $vues = nombre_vues()
            ?>
            Il y a <?= nombre_vues() ?> visite<?php if($vues > 1): ?>s<?php endif; ?> sur le site.
        </div>
        <div class="col-md-4">
            <?php if ($title !== "Newsletter") :?>
                <form action="/newsletter.php" method="POST" class="row g-3 needs-validation" novalidate="novalidate">
                    <div class="">
                        <div class="input-group has-validation">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Entrer votre e-mail" required="required">
                        </div>
                    </div>
                    <div class="">
                        <button class="btn btn-primary" type="submit">S'inscrire</button>
                    </div>
                </form>
            <?php endif ?>
        </div>
        <div class="col-md-4">
            <h5>Navigation</h5>
            <ul class="list-unstyled text-small">
                <?= nav_menu('') ?>
            </ul>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>