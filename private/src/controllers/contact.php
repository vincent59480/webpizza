<?php
/**
 * fichier qui gére la page d'acceuil
 *
 * @return void
 */
function contact_index(){
    /**
 * Definitions des expressions régulières
 * mise dans un objet
 */
 $re = [
    "firstname" => "/^[a-z-]+$/i",
    "lastname" => "/^[a-z-]+$/i",
    "email" => '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/'
 ];
    // include_once "../private/src/views/contact/index.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"]:null;
    $lastname = isset($_POST["lastname"]) ? $_POST["lastname"]:null;
    $email = isset($_POST["email"]) ? $_POST["email"]:null;
    $message = isset($_POST["message"]) ? $_POST["message"]:null;
    
    
    // contrôle des champs

    // contrôle des champs Prénom
    if(!preg_match($re["firstname"],$firstname)){
        echo "Erreur du champs Firstname";
    }
    // contrôle des champs Nom
    if(!preg_match($re["lastname"],$lastname)){
        echo "Erreur du champs lastname";
    }
    // contrôle des champs Email

    // contrôle des champs Message


    var_dump($_POST);
    var_dump($firstname);
    var_dump($lastname);
    var_dump($email);
    var_dump($message);
}
else {
    // TODO: Suppression du else + redirection de l'utilisateur 
    echo "le Formulaire ne peut être traité qu'avec la methode POST";
    }
    

}
// echo "traitement du formulaire";