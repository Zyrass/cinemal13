<?php
include 'conf/include/connexion.php';
include 'conf/include/functions.php';
/**
 * 1 - Include - Header
 * 2 - Content HTML
 * 3 - Include - Footer
 */
include_once 'conf/include/header.php'; ?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center">Cinema L13</h1>
                <h2 class="text-center"><small>BDD utilisé pour tous ces films : cinemal9</small></h2>
            </div> <!-- Fin col-xs-12 -->
        </div> <!-- Fin row -->
    </div> <!-- Fin container -->
</header>

<main>
    <section>
        <div class="container">
            <div class="row">
                <legend class="text-center">Moteur de recherche</legend>
                <div class="col-md-8">
                    <form action="search.php?">
                        <div class="form-group">
                            <input type="text" name="keywords" placeholder="Recherche possible : Un acteur ; Un réalisateur ; Un film US ; Un film FR" class="form-control" id="keywords" autofocus>
                        </div>
                </div> <!-- Fin col-md-8 -->
                <div class="col-md-4">
                        <input type="submit" value="Rechercher" class="btn btn-block btn-default">
                    </form>
                </div> <!-- Fin col-md-4 -->
            </div> <!-- Fin row -->
        </div> <!-- Fin container -->
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <legend class="text-center">Les 3 derniers films insérés dans la base de donnée.</legend>
                <?php foreach ($lastMovies as $value) : ?>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><?= $value['title']; ?></div>
                        <div class="panel-body">
                            <img src="<?= $value['image']; ?>" alt="" class="img-thumbnail" width="100%">
                        </div>
                        <div class="panel-footer">
                            <p class="text-right">Date d'ajout : <?= $value['date_release']; ?></p>
                        </div>
                    </div>
                </div> <!-- Fin col-md-4 -->
                <?php endforeach; ?>
            </div> <!-- Fin row -->
        </div> <!-- Fin container -->

    </section>
</main>


<?php include_once 'conf/include/footer.php'; ?>

