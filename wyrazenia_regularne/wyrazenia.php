<?php
    $wzorzec='/((\bhttps?:\/\/)|(\bwww\.))\S*/';
    $tekst= "https://pl.wikipedia.org/wiki/Wikipedia:Strona_g%C5%82%C3%B3wna<br><br>";
    if(preg_match($wzorzec,$tekst,$matches))
        echo "znaleziono link: ".$matches[0];
    else 
        echo "nie znaleziono link<br>";
?>