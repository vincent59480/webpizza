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

    
        // include_once "../private/src/views/contact/index.php";
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        global $re,$db;// pour que la variable $re soit accessible dans la fonction
        //On récupere les valeur des champs du formulaire
        // $firstname= $_POST["firstname"]

        $firstname = isset($_POST["firstname"]) ? $_POST["firstname"]:null;
        $lastname = isset($_POST["lastname"]) ? $_POST["lastname"]:null;
        $email = isset($_POST["email"]) ? $_POST["email"]:null;
        $message = isset($_POST["message"]) ? $_POST["message"]:null;
        
        $send=true;
        // contrôle des champs

        // contrôle des champs Prénom
        if(!preg_match($re["firstname"],$firstname)){
            echo "Erreur du champs Firstname";
            $send=false;
        }
        // contrôle des champs Nom
        if(!preg_match($re["lastname"],$lastname)){
            echo "Erreur du champs lastname";
            $send=false;
        }
        // contrôle des champs Email
        if(!preg_match($re["email"],$email)){
            echo "Erreur du champs email";
            $send=false;
        }
        // contrôle des champs Message
        if(strlen($message)<10){
            echo "Le message est vide";
            $send=false;
        } 
        
        if($send){
            
            // TODO: création de la table message"(id, firstname, lastname,message, datetime)
            // TODO Ajout du fichier nSql contenant la structure de la table "message du repertoire /private/sql
            // TODO enregistrement du message dans la BDD avec PDO
            // TODO Définition d'un message de callback /flashbag (succes or error)
            // TODO redirection de l'utilisateur de vers la page précédente

            // TODO "on enregistre le message dans la BDO
            // creation de la requete d'insertion. c'est un objet de type PDO
            $query = $db["main"]->prepare("INSERT INTO messages (`firstname`,`lastname`,`email`,`message`,`sending_timestamp`)
                VALUES (:firstname,:lastname,:email,:message,:sendingTimestamp)");
           
            /**
             * requete : attention de bien faire concorder les types de param
             *  avec le type des champs firstname, lastname, email,message
             */
            $query->bindValue(':firstname',$firstname,PDO::PARAM_STR);
            
            $query->bindValue(':lastname',$lastname,PDO::PARAM_STR);
           
            
            $query->bindValue(':email',$email,PDO::PARAM_STR);
           
            
            $query->bindValue(':message',$message,PDO::PARAM_STR);
            
            $query->bindValue(':sendingTimestamp', time(), PDO::PARAM_STR);
           
            $result=$query->execute();
            if($result){
                echo "on enregistre dans la BDD";
            } else {

            }
            //  $r_query=$query->fetchAll();
            //  var_dump($r_query);
            echo "on enregistre dans la BDD";
          
        }
        else {
            echo "erreur sur le formulaire";
        }
        // var_dump($_POST);
        // var_dump($firstname);
        // var_dump($lastname);
        // var_dump($email);
        // var_dump($message);
    }








    // else {
    //     // TODO: Suppression du else + redirection de l'utilisateur 
    //     echo "le Formulaire ne peut être traité qu'avec la methode POST";
    //     }
        

}
// echo "traitement du formulaire";