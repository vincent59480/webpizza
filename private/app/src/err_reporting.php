<?php
/**
 * Fichier de définition du comportement des erreurs php
 * Info
 *  http://php.net/manual/fr/function.error-reporting.php
 */

 //dans le cas ou la variable $env n'est pas défini
 //on initialise la variable $env avec la valeur prod
// on test si la variable $env n'est pas défini
if (!isset($env)){
    $env="prod";
}
// dans le cas ou la variable $env est défini a une autre valeur que "dev"
//*on demande à PHP d'ignorer les erreurs
if($env != "env"){
ini_set("display_error",0);
ini_set("display_startup_error",0);
error_reporting(0);
}
// dans le cas ou la variable $env est défini a une autre valeur que "dev"
//*on demande à PHP d'afficher toutes les erreurs
else{
    ini_set("display_error",1);
ini_set("display_startup_error",1);
error_reporting(E_ALL);

}

