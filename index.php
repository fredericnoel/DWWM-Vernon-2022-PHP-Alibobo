<?php

session_start();

<<<<<<< HEAD
require_once './functions/autoLoad.php';
autoLoad("*.php");

require __DIR__ . '/vendor/autoload.php';
=======

require __DIR__ . '/vendor/autoload.php';
require_once './functions/autoload.php';
autoload("*.php");

// $toto ="toto";
// dump($toto);


>>>>>>> 06c41c50bc0f18afbf452100737d28c52a6c3b3f

// Définir le fuseau horaire dans lequel le serveur se trouve
date_default_timezone_set('Europe/Paris');

/* Utiliser include ou require
* include renvoie un avertissement simple en cas d'erreur
* require renvoie une erreur fatale et arrête l'exécution du script
*/

if (verifierAdmin()) 
    require_once './includes/headerAdmin.php';
else 
    require_once './includes/header.php';

require_once './includes/main.php';
require_once './includes/footer.php';