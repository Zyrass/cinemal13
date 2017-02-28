<?php
include 'conf/include/connexion.php';
include 'conf/include/functions.php';
include_once 'conf/include/header.php'; ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center text-warning">Cinema L13 - Réalisateurs</h1>
                    <h2 class="text-center">
                        <small>Voici la liste des réalisateurs enregistrés dans la BDD</small>
                    </h2>
                </div> <!-- Fin col-xs-12 -->
            </div> <!-- Fin row -->
        </div> <!-- Fin container -->
    </header>
    <main>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Nom</th>
                                <th class="text-center">Prénom</th>
                                <th class="text-center">Sexe</th>
                                <th class="text-center">Nationalitée</th>
                                <th class="text-center">Oscars</th>
                                <th class="text-center">Photo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($directors as $value) : ?>
                                <tr class="text-center">
                                    <td width="20%" class="tdStyle"><?= strtoupper($value['lastname']); ?></td>
                                    <td width="20%" class="tdStyle"><?= ucfirst($value['firstname']); ?></td>
                                    <td width="5%" class="tdStyle"><?php $sexe($value['sex']); ?></td>
                                    <td width="10%" class="tdStyle"><?= $value['nationality']; ?></td>
                                    <td width="20%" class="tdStyle"><?= $oscar($value['note']); ?></td>
                                    <td width="30%"><img src="<?= $value['image']; ?>" alt="" width="20%" class="img-thumbnail"></td>
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