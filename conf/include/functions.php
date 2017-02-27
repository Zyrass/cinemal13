<?php
/**
 * Les 3 derniers films insérés dans la BDD
 */
$req = $bdd->prepare('
  SELECT `title`, `image`, `date_release`
  FROM `movies` 
  ORDER BY `date_release` DESC 
  LIMIT 0,3'
);
$req->execute();
$lastMovies = $req->fetchAll();


/**
 * Top 5 des films les mieux notés
 */
$req = $bdd->prepare('
  SELECT `title`, `image`, `note_presse`
  FROM `movies`
  ORDER BY `note_presse` DESC 
  LIMIT 0,5'
);
$req->execute();
$BestMovies = $req->fetchAll();