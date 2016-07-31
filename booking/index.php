<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "de":
        //echo "PAGE DE";
        include("index_de.php");//include check session DE
        break;    
    default:
        //echo "PAGE EN - Setting Default";
        include("index_en.php");//include EN in all other cases of different lang detection
        break;
}
?>



