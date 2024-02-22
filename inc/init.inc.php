<?php
// Titre pages
$title = '';
// configuration phpdotenv
require __DIR__ . '/../vendor/autoload.php';
Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../')->load();
//--------- BDD
$mysqli = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
//--------- SESSION
session_start();
//--------- CHEMIN
define("RACINE_SITE", "http://" . $_SERVER['HTTP_HOST'] . "/");
$contenu = "";
require('functions.inc.php');
