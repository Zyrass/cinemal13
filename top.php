<?php
include 'conf/include/connexion.php';
include 'conf/include/functions.php';
include_once 'conf/include/header.php'; ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center text-warning">Cinema L13 - Top 10</h1>
                    <h2 class="text-center">
                        <small>Voici la liste des 5 films les plus mieux notés</small>
                    </h2>
                </div> <!-- Fin col-xs-12 -->
            </div> <!-- Fin row -->
        </div> <!-- Fin container -->
    </header>
    <main>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Titre</th>
                                    <th class="text-center">Note</th>
                                    <th class="text-center">Covers</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($bestMovies as $value) : ?>
                                    <tr class="text-center">
                                        <td width="50%" class="tdStyle"><?= ucfirst($value['title']); ?></td>
                                        <td width="10%" class="tdStyle"><?= ucfirst($value['note_presse']); ?></td>
                                        <td width="40%"><img src="<?= $value['image']; ?>" alt="" width="20%" class="img-thumbnail"></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once 'conf/include/footer.php'; ?>
