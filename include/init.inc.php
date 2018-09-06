<?php
// Connexion à la BDD en PDO
// *************************
$pdo = new PDO(
	'mysql:host=localhost;dbname=veville',
	'root',
	'root',
	array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
));

//--------------------------
// Ouverture d'une session
session_start();

//--------------------------
// Définition des constantes
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/PHP/veville/');
define("URL", 'http://localhost/PHP/veville/');
