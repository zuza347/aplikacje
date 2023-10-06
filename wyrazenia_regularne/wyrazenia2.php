<?php
    $wzorzec='/\d/';
    $tekst="mam 4 zeszyty<br>";
    if(preg_match($wzorzec,$tekst))
        echo"znaleziono cyfrę<br>";
    else 
        echo"nie znaleziono cyfry";
echo "znaleziono:".preg_match_all($wzorzec,$tekst);
?>