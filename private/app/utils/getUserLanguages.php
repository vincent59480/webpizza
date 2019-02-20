<?php

/**
 * determine les langues de l'utilisateur
 *
 * 
 */
if(!function_exists("getUserlanguages"))
    {
        function getUserlanguages()
        {
            //on récupere la liste des langues depuis la super global
            $languages_str =$_SERVER["HTTP_ACCEPT_LANGUAGE"];
            $languages_arr=explode(",",$languages_str);
            debug($languages_arr);
            foreach ($languages_arr as $key => $value)
             {
                $value= explode(";",$value);
                $value=$value[0];
                $languages_arr[$key] = $value;
            }
            
        }

}
getUserlanguages();
