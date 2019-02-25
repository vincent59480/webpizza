<?php
/**
 * fichier de configuration
 * 
 * 1. Définition des constantes
 * 2. Définition des variables d'environement d'execution
 * 
 * 
 */


 /**
  * 1. définition des constantes
  */
  // Définir le chemin du répertoire "utils"
define("UTILS_PATH","../private/app/utils/");
// WEBSITE_TITLE : Définition du titre du site
define ("WEBSITE_TITLE","WebPizza !");
/**
 * 2. Définition des variables d'environement d'execution
 * Les valeurs peuvent être : "prod" ou "dev"
 * Par défaut on considère que l'application s'éxecute en environnement PROD
 */
$env = "prod";
// Liste des domaines que l'on considères comme etant des environnements de développement
$dev_domains = [
    "127.0.0.1",
    "localhost",
    "webpizza.local"
];

/**
 * 3. définition des variables de BDD
 */
// Liste des configurations de connections aux bases de données par défaut
$db_config=[];// tableau qui va contenir toutes les informations de connection à la BDD
// Liste des connections aux BDD
// Cette liste sera nourris par le fichier db_connect.php
$db=[];
// inclusion de la config de la BDD
require_once "database.php";

/**
 * 4. Définition des Variables de routage.
 * 
 */
// définition de l'uri
 $uri ="/";
 //Définition de la table de routage par défaut
 $routes=[];
 // contient les information de la route courante
 $route=[];
//inclusion de ka config du rootage
require_once "routes.php";
/**
 * Définition des expressions régulieres
 */
$re = [
  "firstname" => '/^[a-z-]+$/i',
  "lastname" => '/^[a-z-]+$/i',
  "email" => '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/'
];