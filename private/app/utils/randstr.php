<?php
echo UTILS_PATH;
/**
 * fonction qui genere une chaine de caracteres aléatoires
 */
if (!function_exists("randstr"))
 { 
    function randstr($length=10, $upper=false, $number=false) 
    { 
    $characters = 'abcdefghijklmnopqrstuvwxyz'; 
    $characters_upper = strtoupper($characters); 
    $characters_number = '0123456789'; 
    
    if ($upper) { 
    $characters.= $characters_upper; 
    var_dump($characters); 
    } 
    
    if ($number) { 
    $characters .= $characters_number; 
    var_dump($characters); 
    } 
    
    $charactersLength = strlen($characters); 
    $randomString = ''; 
    for ($i = 0; $i < $length; $i++) { 
    $randomString .= $characters[rand(0, $charactersLength - 1)]; 
    } 
    return $randomString; 
    } 
    }