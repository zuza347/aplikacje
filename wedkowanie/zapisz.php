<?php
$servername="localhost";
$username="root";
$password="";
$db="wedkowanie";
$conn=mysqli_connect($servername,$username,$password,$db);
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$adres=$_POST['adres'];
$sql="INSERT INTO karty_wedkarskie VALUES (NULL,'$imie','$nazwisko','$adres',NULL,NULL)";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>