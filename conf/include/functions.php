<?php
/**
 * Les 3 derniers films insérés dans la BDD
 */
$req = $bdd->prepare('SELECT `title`, `image`, `date_release` FROM `movies` ORDER BY `date_release` DESC LIMIT 0,3');
$req->execute();
$lastMovies = $req->fetchAll();


/**
 * Top 10 des films les mieux notés
 */
$req = $bdd->prepare('SELECT `title`, `image`, `note_presse` FROM `movies` ORDER BY `note_presse` DESC LIMIT 0,10');
$req->execute();
$bestMovies = $req->fetchAll();

/**
 * Flop 10 des films les moins bien notés
 */
$req = $bdd->prepare('SELECT `title`, `image`, `note_presse` FROM `movies` ORDER BY `note_presse` LIMIT 0,10');
$req->execute();
$looseMovies = $req->fetchAll();

/**
 * Les films US
 */
$req = $bdd->prepare('SELECT `title`, `bo`, `image` FROM `movies` WHERE `bo` LIKE \'VO%\'');
$req->execute();
$filmUS = $req->fetchAll();

/**
 * Les films FR
 */
$req = $bdd->prepare('SELECT `title`, `bo`, `image` FROM `movies` WHERE `bo` LIKE \'VF\'');
$req->execute();
$filmFR = $req->fetchAll();

/**
 * Les acteurs
 */
$req = $bdd->prepare('SELECT `firstname`, `lastname`, `image`, `nationality`, `sex`, `recompenses` FROM `actors`');
$req->execute();
$actors = $req->fetchAll();

/**
 * Les réalisateurs
 */
$req = $bdd->prepare('SELECT `firstname`, `lastname`, `image`, `nationality`, `sex`, `note` FROM `directors`');
$req->execute();
$directors = $req->fetchAll();

/**
 * Sexe (fonction anonyme)
 */
$sexe = function($info){
    $homme  = '<img src="img/H.png" alt="Icon man" width="80%"/>';
    $femme  = '<img src="img/f.png" alt="Icon wife" width="80%"/>';
    $inconu = '<img src="img/Null.png" alt="Icon wife" width="80%"/>';

    if($info === 'H') {
        echo $homme;
    } elseif($info === 'F') {
        echo $femme;
    } else {
        echo $inconu;
    }
};

/**
 * Oscar - Acteurs
 */
$oscar = function($infoOscar){
    $recompense  = '<img src="img/oscar.png" alt="Icon man" width="10%"/>';

    switch ($infoOscar) {
        case 1:
            echo str_repeat($recompense,1). ' (' . $infoOscar .')';
            break;
        case 2:
            echo str_repeat($recompense,2). ' (' . $infoOscar .')';
            break;
        case 3:
            echo str_repeat($recompense,3). ' (' . $infoOscar .')';
            break;
        case 4:
            echo str_repeat($recompense,4). ' (' . $infoOscar .')';
            break;
        case 5:
            echo str_repeat($recompense,5). ' (' . $infoOscar .')';
            break;
        case 6:
            echo str_repeat($recompense,6). ' (' . $infoOscar .')';
            break;
        case 7:
            echo str_repeat($recompense,7). ' (' . $infoOscar .')';
            break;
        case 8:
            echo str_repeat($recompense,8). ' (' . $infoOscar .')';
            break;
        case 9:
            echo str_repeat($recompense,9). ' (' . $infoOscar .')';
            break;
        case 10:
            echo str_repeat($recompense,10). ' (' . $infoOscar .')';
            break;
        case 11:
            echo str_repeat($recompense,11). ' (' . $infoOscar .')';
            break;
        case 12:
            echo str_repeat($recompense,12). ' (' . $infoOscar .')';
            break;
        case 13:
            echo str_repeat($recompense,13). ' (' . $infoOscar .')';
            break;
        case 14:
            echo str_repeat($recompense,14). ' (' . $infoOscar .')';
            break;
        case 15:
            echo str_repeat($recompense,15). ' (' . $infoOscar .')';
            break;
        case 16:
            echo str_repeat($recompense, 16) . ' (' . $infoOscar . ')';
            break;
    }
};

/**
 * Nomination - Réalisateurs
 */
$nomination = function($infoNomi){
    $stars  = '<img src="img/etoiles.png" alt="Icon man" width="5%"/>';
    switch ($infoNomi) {
        case 1:
            echo str_repeat($stars, 1) . ' (' . $infoNomi . ')';
            break;
        case 2:
            echo str_repeat($stars, 2) . ' (' . $infoNomi . ')';
            break;
        case 3:
            echo str_repeat($stars, 3) . ' (' . $infoNomi . ')';
            break;
        case 4:
            echo str_repeat($stars, 4) . ' (' . $infoNomi . ')';
            break;
        case 5:
            echo str_repeat($stars, 5) . ' (' . $infoNomi . ')';
            break;
        case 6:
            echo str_repeat($stars, 6) . ' (' . $infoNomi . ')';
            break;
        case 7:
            echo str_repeat($stars, 7) . ' (' . $infoNomi . ')';
            break;
        case 8:
            echo str_repeat($stars, 8) . ' (' . $infoNomi . ')';
            break;
        case 9:
            echo str_repeat($stars, 9) . ' (' . $infoNomi . ')';
            break;
        case 10:
            echo str_repeat($stars, 10) . ' (' . $infoNomi . ')';
            break;
        case 11:
            echo str_repeat($stars, 11) . ' (' . $infoNomi . ')';
            break;
        case 12:
            echo str_repeat($stars, 12) . ' (' . $infoNomi . ')';
            break;
        case 13:
            echo str_repeat($stars, 13) . ' (' . $infoNomi . ')';
            break;
        case 14:
            echo str_repeat($stars, 14) . ' (' . $infoNomi . ')';
            break;
        case 15:
            echo str_repeat($stars, 15) . ' (' . $infoNomi . ')';
            break;
        case 16:
            echo str_repeat($stars, 16) . ' (' . $infoNomi . ')';
            break;
    }
};
