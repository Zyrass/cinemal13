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
            <a class="navbar-brand" href="index.php">Cinema L13</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myNav">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="actors.php">Acteurs</a></li>
                <li><a href="directors.php">Réalisateurs</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Films <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="moviesUS.php">Film US</a></li>
                        <li><a href="moviesFR.php">Film FR</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="top.php">Le Top 5</a></li>
                        <li><a href="flop.php">Listes des Flop</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Connexion</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Gestion Acteurs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Gestion Réalisateurs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Gestion Films</a></li>
                    </ul>
                </li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>