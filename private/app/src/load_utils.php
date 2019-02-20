<?php
/**
 * Fichier de chargement automatique de script du rep private/app/utils
 * 
 */

// Test si la constante UTILS_PATH est définie

if(!defined("UTILS_PATH")){
    define("UTILS_PATH",null);
}

if(UTILS_PATH != null)
{
    /**
     * Scanner répertoire UTILS_PATH
     *  scandir : renvoie un tableau
     * 
     */
    $utils_scan =scandir(UTILS_PATH);
    

    /**
     * boucle sur la liste des entrées $utils_scan
     */
    foreach ($utils_scan as $key => $value) {

        if (preg_match("/\.php$/",$value)) //expression réguliere qui recherche les fichiers .php
        {
            include_once $UTILS_PATH.$value; //on charge les fichiers contenues dans le repertoire "../private/app/utils/" avec l'extension .php
        }
    
    }
}



var_dump($utils_scan); 