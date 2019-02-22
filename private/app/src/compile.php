<?php
/**
 * fichier de compilation de l'application
 * 
 * Ce fichier génére la page HTML avant de retourner le résultat au navigateur
 * 
 */

//dans le cas ou la route est vide, on force le prog a redéfinir la route vers la page 404

if(empty($route)){
    $route= end($routes); // END : se positionne a la fin du fichier routes=>donc sur la ligne  ["error-404","/404","error:404",["HEAD","GET"]]
}

/**
 * Récupération des éléments de la route qui définissent le contrôleur
 */
// si ce parametre est vide on arrete le prog
 if(!isset($route[2])|| empty($route[2])){
     throw new Exception("Le contrôleur n'est pas défini");
 }
 //intialisation des variables qui définiront le fichier et la fonction à executer
 $controller_file= null;
 $controller_path = null;
 $controller_methode=null;
$controller=explode(":",$route[2]);
// --- définition du fichier contrôleur

$controller_file=isset($controller[0]) ? $controller[0]:null;
if ($controller_file !==null && !empty($controller_file)){
    $controller_path="../private/src/controllers/".$controller_file.".php";

}
// --- définir le nom de la fonction qui sera à exécuter
$controller_methode=isset($controller[1])?$controller[1]:null;

if ($controller_methode !==null && !empty($controller_methode)){
    $controller_methode=$controller_file."_".$controller_methode;
}
else{
    $controller_methode=$controller_file."_index";
}

// echo"<br>";
// var_dump($route[2]);
// echo"<br>";
// var_dump($controller);
// echo"<br>";
// var_dump($controller_file);
// echo"<br>";
// var_dump($controller_path);
// echo"<br>";
// var_dump($controller_methode);
/**
 * Intégration du fichier controleur
 */
if(!file_exists($controller_path)){
    throw new Exception("Le fichier contrôleur de la route \"".$route[0]."\"est manquant");
}
// Le fichier controleur existe, il est inclus au programme
include_once $controller_path;
/**
 * Execution de la fonction du controleur
 */
// test de l'execution de la fonction du controleur
if(!function_exists($controller_methode)){
    throw new Exception("La methode \"".$controller_methode."de la route".$route[0]."\"est manquante");
}
// Execution de la fonction en fonction de la route;
$controller_methode();