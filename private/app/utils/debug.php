<?php
/**
 * Debug permet d'afficher une donnée entre les balise <pre>
 *
 * @param [type] $data
 * 
 */
// test si la fonction debug exist

if(!function_exists("debug"))
    {
    function debug($data)  { 
        echo "<pre>";
        print_r($data);
        echo"</pre>";
        }
    }

