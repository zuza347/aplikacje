<?php
    session_start();

    echo "Welcome to page #2<br>";

    echo "Ulubiony kolor: ". $_SESSION['favcolor']."<br>";
    echo "Ulubione zwierzę: ". $_SESSION['animal']."<br>";
    echo date('Y m d H:i:s', $_SESSION['time']). "<br>";
    echo "Nazywam się: ". $_SESSION['dane']."<br>";

    echo $_SESSION['bzdura'];
?>