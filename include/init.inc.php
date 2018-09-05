<?php
// Connexion à la BDD en PDO
// *************************
$pdo = new PDO(
	'mysql:host=localhost;dbname=location',
	'root',
	'delpiero92',
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
/* 
echo RACINE_SITE; echo '<br>'; echo URL;
A configurer lors de la mise en production (ip ou lien vers la racine du serveur web, hébergé mutuellement).
*/
//--------------------------
// Déclaration de variable
$content = ''; // affectation une chaîne de caractères vide pour éviter le undefined
//--------------------------
// Inclusion des fonctions
require_once('include/fonctions.inc.php');