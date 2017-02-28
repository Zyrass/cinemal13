<?php
include '../../conf/include/connexion.php';
include '../../conf/include/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cinema - L13</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../conf/css/myStyle.css">
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../index.php"><span class="text-danger">Cinema L13</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myNav">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="../../actors.php">Acteurs</a></li>
                <li><a href="../../directors.php">Réalisateurs</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Films <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../moviesUS.php">Liste des films US </a></li>
                        <li><a href="../../moviesFR.php">Liste des films FR </a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../../top.php">Top 10 des meilleurs films</a></li>
                        <li><a href="../../flop.php">Top 5 des mauvais films</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Connexion</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../actors/view_actors.php">Gestion Acteurs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../directors/view_directors.php">Gestion Réalisateurs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../movies/view_movies.php">Gestion Films</a></li>
                    </ul>
                </li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center text-danger">Cinema L13 - Administration</h1>
                <h2 class="text-center"><small class="text-info">Section - Réalisateur</small></h2>
            </div> <!-- Fin col-xs-12 -->
        </div> <!-- Fin row -->
    </div> <!-- Fin container -->
</header>

<main>

</main>


<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center">&copy; - All right reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- Script Jquery -->
<script src="https://cdn.jsdelivr.net/jquery/3.1.1/jquery.min.js"></script>
<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Script Perso -->
<script src="../../conf/js/myScript.js"></script>
</body>
</html>
