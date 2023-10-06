<?php
    $wzorzec='/\d{5}/';
    $tekst= "telefon 4537897635<br>";
    if(preg_match($wzorzec,$tekst))
        echo "znaleziono cyfrę<br>";
    else 
        echo "nie znaleziono cyfry";
echo "znaleziono:".preg_match_all($wzorzec,$tekst);
?>