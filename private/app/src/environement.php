<?php
/**
 * Fichier de définition de l'environement d'éxecution de l'application
 * 
 */

// dans ke cas ou la variable $dev_domains n'est pas défini (dasn le fichier config.php)
// on initialise la variable $dev_domains avec un tableau vide

if(!isset($dev_domains)){
    $dev_domains=[];
}

//si la super global $_SERVER["SERVERNAME"] n'est pas vide
// et que la valeur de la super global $_SERVER["SERVERNAME"] est dans le tableau
//$dev_domains, alors on redefini la variable $env

// si la valeur de $_SERVER["SERVER_NAME"] n'est pas vide et $_SERVER["SERVER_NAME"] contenu dans le tableau $dev_domains on est en dev.
if (!empty($_SERVER["SERVER_NAME"]) && in_array($_SERVER["SERVER_NAME"],$dev_domains) ) 
    {
        $env="DEV";
    }




