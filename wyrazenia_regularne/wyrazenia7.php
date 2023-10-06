<?php
    $wzorzec='/([0123]?/d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})';
    $tekst= "12.04.2023 data";
    if(preg_match($wzorzec,$tekst,$matches))
        echo "znaleziono kod".$matches[0];
    else 
        echo "nie znaleziono kodu <br>";
echo "znaleziono:".preg_match_all($wzorzec,$tekst);
?>