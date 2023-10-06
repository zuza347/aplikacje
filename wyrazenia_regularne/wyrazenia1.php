<?php
    $wzorzec='/być/';
    $tekst="być albo nie być<br>";
    if(preg_match($wzorzec,$tekst))
        echo"znaleziono wzorzec<br>";
    else 
        echo"nie znaleziono wzorca";
echo "znaleziono:".preg_match_all($wzorzec,$tekst);
?>