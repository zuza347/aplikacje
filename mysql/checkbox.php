<?php
echo "pierwszy checkbox: ". $_POST["vehicle1"];
echo "drugi checkbox: ".$_POST["vehicle2"];
$servername="localhost";
$username="root";
$password="";
$database="vehicle";
$conn=mysqli_connect($servername,$username,$password,$database);
$nazwa1=$_POST['vehicle1'];
$nazwa2=$_POST["vehicle2"];
$sql="INSERT INTO pojazd(nazwa,nazwa2)
    VALUES ('$nazwa1','$nazwa2')";
$result=mysqli_query($conn,$sql);
$sql="ALTER TABLE pojazd ADD COLUMN nazwa3 text";
$result=mysqli_query($conn,$sql);
?>