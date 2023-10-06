<?php
    $wzorzec='/\S*\.gif/i';
    $tekst= "w pliku obrazek.gif jest ikona<br><br>";
    if(preg_match($wzorzec,$tekst))
        echo "znaleziono obrazek<br>";
    else 
        echo "nie znaleziono obrazka <br>";
echo "znaleziono:".preg_match_all($wzorzec,$tekst);
?>