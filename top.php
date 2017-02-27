<?php
include 'conf/include/connexion.php';
include 'conf/include/functions.php';
include_once 'conf/include/header.php'; ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">Cinema L13 - Top 10</h1>
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
                    <div class="col-md-4 col-md-offset-4">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Titre</th>
                                    <th class="text-center">Note</th>
                                    <th class="text-center">Covers</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($BestMovies as $value) : ?>
                                    <tr class="text-center">
                                        <td><?= $value['title']; ?></td>
                                        <td><?= $value['note_presse']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal">
                                                <span class="glyphicon glyphicon-eye-open"></span>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="info">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="info"></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="<?= $value['image']; ?>" alt="" width="100%">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>



<?php include_once 'conf/include/footer.php'; ?>
