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

    //route[0],route[1],route[2],route[0],route[3],
// Route Index (page d'acceuil du site)
    
    ["homepage","/","homepage:index",["HEAD","GET"]],
    // Liste des produits
    ["pizzas", "/pizzas", "products:pizzas", ["HEAD","GET"]],
    ["salads", "/salades", "products:salads", ["HEAD","GET"]],
    ["desserts", "/desserts", "products:desserts", ["HEAD","GET"]],
    ["drinks", "/boissons", "products:drinks", ["HEAD","GET"]],
    ["menus", "/menus", "products:menus", ["HEAD","GET"]],

    // Page de traitement du formulaire
    ["contact", "/contact", "contact:index", ["HEAD","POST"]],

    // Pages de sécurité
    ["login", "/login", "security:login", ["HEAD","GET","POST"]],
    ["register", "/inscription", "security:register", ["HEAD","GET","POST"]],
    ["forgotten_password", "/mot-de-passe-oublie", "security:forgotten_password", ["HEAD","GET","POST"]],

    // Page de commande
    ["order", "/panier", "order:index", ["HEAD","GET"]],

    // Profil utilisateur
    ["account", "/mon-compte", "account", ["HEAD","GET"]],


    //Erreur 404 Toujours mettre en dernier
    ["error-404","/404","errors:404",["HEAD","GET"]]

 ];