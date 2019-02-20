<?php


/**
 * 1. intégration de la configuration
 */
require_once "../private/app/config/config.php";


/**
 * 2. définition de l'environement
 */
require_once "../private/app/src/environement.php";


/**
 * 3. Comportement des erreurs
 */
require_once "../private/app/src/err_reporting.php";


/**
 * 4. Connection aux bases de données
 */
require_once "../private/app/src/db_connect.php";

/**
 * 5. routage de l'application
 */
require_once "../private/app/src/rooting.php";
/**
 * 6. Inclusion des fonctions utils
 */
require_once "../private/app/src/load_utils.php";

echo randstr(32,false,true);
echo randstr(10,true,true);
getUserlanguages(true);


/**
 * 7. Compilation de la page
 */
require_once "../private/app/src/compile.php";
