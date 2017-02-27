<?php
define('HOST', 'mysql:host=localhost;dbname=cinemal9');
define('USER', 'root');
define('PASSWORD', '');

try {
    $bdd = new PDO(HOST,USER,PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $bdd->exec('SET NAMES UTF8');
} catch (PDOException $e) {
    die('Oups, vous avez rencontré une erreur : ' .$e->getMessage());
}