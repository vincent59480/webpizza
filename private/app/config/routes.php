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

 $routes=[
// Route Index (page d'acceuil du site)
    ["homepage","/","homepage:index",["HEAD","GET"]],
    // page de contact
    ["contact","/contact","contact:index",["HEAD","GET"]]
 ];