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
            <a class="navbar-brand" href="index.php"><span class="text-danger">Cinema L13</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myNav">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="actors.php">Acteurs</a></li>
                <li><a href="directors.php">Réalisateurs</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Films <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="moviesUS.php">Liste des films US </a></li>
                        <li><a href="moviesFR.php">Liste des films FR </a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="top.php">Top 10 des meilleurs films</a></li>
                        <li><a href="flop.php">Top 5 des mauvais films</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Connexion</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="admin/actors/view_actors.php">Gestion Acteurs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="admin/directors/view_directors.php">Gestion Réalisateurs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="admin/movies/view_movies.php">Gestion Films</a></li>
                    </ul>
                </li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>