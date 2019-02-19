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