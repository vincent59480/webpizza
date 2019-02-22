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
    // Liste des produits
    ["pizzas", "/pizzas", "products:pizzas", ["HEAD","GET"]],
    ["salads", "/salades", "products:salads", ["HEAD","GET"]],
    ["desserts", "/desserts", "products:desserts", ["HEAD","GET"]],
    ["drinks", "/boissons", "products:drinks", ["HEAD","GET"]],
    ["menus", "/menus", "products:menus", ["HEAD","GET"]],

    // Page de contact
    ["contact", "/contact", "contact:index", ["HEAD","GET","POST"]],

    // Pages de sécurité
    ["login", "/login", "security:login", ["HEAD","GET","POST"]],
    ["register", "/register", "security:register", ["HEAD","GET","POST"]],
    ["forgotten_password", "/forgotten-password", "security:forgotten_password", ["HEAD","GET","POST"]],

    // Page de commande
    ["order", "/order", "order:index", ["HEAD","GET"]],

    // Profil utilisateur
    ["account", "/mon-compte", "account", ["HEAD","GET"]],


    //Erreur 404 Toujours mettre en dernier
    ["error-404","/404","error:404",["HEAD","GET"]]

 ];