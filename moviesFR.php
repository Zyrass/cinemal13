<?php
include 'conf/include/connexion.php';
include 'conf/include/functions.php';
include_once 'conf/include/header.php'; ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center text-warning">Cinema L13 - Film FR</h1>
                    <h2 class="text-center">
                        <small>Voici la liste des films en version Français</small>
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
                                <th class="text-center">Titre</th>
                                <th class="text-center">BO</th>
                                <th class="text-center">Covers</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($filmFR as $value) : ?>
                                <tr class="text-center">
                                    <td width="50%" class="tdStyle"><?= ucfirst($value['title']); ?></td>
                                    <td width="10%" class="tdStyle"><?= strtoupper($value['bo']); ?></td>
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