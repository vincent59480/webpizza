<?php
/**
 * fichier qui gére la page d'acceuil
 *
 * @return void
 */

function account_index(){

        // vérifie si l'utilisateur est identifié
        if(!isset($_SESSION["user"]) || empty($_SESSION["user"]))
        {
            redirect("/login");
        }
    include_once "../private/src/views/account/index.php";
}