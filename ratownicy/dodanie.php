<?php
$servername="localhost";
$username="root";
$password="";
$database="ee09"
$conn=mysqli_connect($servername,$username,$password,$database);
$numerek=$_POST['numerek'];
$ratownik1=$_POST['ratownik1'];
$ratownik2=$_POST['ratownik2'];
$ratownik3=$_POST['ratownik3'];
$sql="INSERT INTO ratownicy VALUES('',$numerek,'$ratownik1','$ratownik2','$ratownik3')";
mysqli_query($conn,$sql);
echo "Do bazy zostało wysłane zapytanie: $kw";
?>