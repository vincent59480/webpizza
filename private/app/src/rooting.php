<?php

/**
 * fichier de Définition des routes de l'application
 * 
 * - Chaque ligne du tableau $routes défini une route
 * - Chaque route est définie par :
 *          - le nom de la route
 *          - le "path"
 *          - le controller, la fonction declenché par la route
 *          - la/les méthode(s)
 */
//Dans le cas ou la variable $routes n'est pas définie dans le fichier routes.php
if(!isset($routes)){
    $routes=[];
    
}
if (!empty($_SERVER["REQUEST_URI"])){
    $uri=$_SERVER["REQUEST_URI"];
}
// var_dump($uri);

//recherche de l'URI dans le tableau de routage
foreach ($routes as $route) {
    //le parametre path doit correspondre à ûri
    if ($route[1]==$uri){
        //on ajoute le nom de la route courante dans la variable $GLOBALS de php
        // pour l'utiliser par la suite

        $GLOBALS["route_active"]=$route[0];
        // si la route est trouvé dans la table de routage on sort de la boucle
        // grace au mot clé brak;
        // la variable $route contient les infos de la dernière itération de la bouble
        break;
        }
    }

    //A ce niveau soit la variable $route est renseigné grace à un URI trouvé
    // dans le tableau $route, soit elle a pris la valeur de la dernière itération du tableau $route CAD, la route 404
    if(!isset($GLOBALS["route_active"])){
        $GLOBALS["route_active"]="error-404";
    }


    // echo "<h3>apres la boucle</h3>";
    // var_dump($route);
    // echo "<br>";