<?php


// dans le casa ou la variable $db_config n'est pas défini(dans le fichier config.php)
//on initialise la variable $db_config avec un tableau vide
if (!isset($db_config)){
    $db_config=[];
}

// on boucle sur la liste de configuration des connexions aux BDD
// print_r($db_config);
foreach ($db_config as $name => $params)
{
    // print_r($name);
    // echo "<br>";
    // print_r($params["type"]);
    // Genere la chaine DSN PDO (ex "mysql:host=localhost;dbname=DBNAME")
    $db_dsn=$params["type"].":";
    $db_dsn.="host=".$params["host"].";";
    $db_dsn.="port=".$params["port"].";";
    $db_dsn.="dbname=".$params["schema"].";";
    $db_dsn.="charset=".$params["charset"].";";
    // user et pwd
    $db_user = $params["user"];
    $db_pass = $params["pass"];
    // instance de connection
    $db[$name]= new PDO($db_dsn,$db_user,$db_pass);
    // print_r($db_dsn);
    // comment les erreurs doivent se comporter
    // var_dump($env);
        if($env == "DEV")
            {
                $db[$name]->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                // var_dump($db[$name]);
            }
}
// $str = "SELECT * FROM ingredients";
// // var_dump($str);
// $q = $db["main"]->query($str);
// $r = $q->fetchALL();
// var_dump($r);