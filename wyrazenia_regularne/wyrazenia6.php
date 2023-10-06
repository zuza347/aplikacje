<?php
    $wzorzec='/\d{2}-\d{3}/';
    $tekst= "kod pocztowy to 34-200 sucha beskidzka<br><br>";
    if(preg_match($wzorzec,$tekst,$matches))
        echo "znaleziono kod".$matches[0].;
    else 
        echo "nie znaleziono kodu <br>";
echo "znaleziono:".preg_match_all($wzorzec,$tekst);
?>