<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="baza";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("nie udało się połączyć:".mysqli_error($conn));
    }
    $data=$_POST['data'];
    $osoby=$_POST['osoby'];
    $telefon=$_POST['telefon'];
    $sql="INSERT INTO rezerwacje
        (data_rez,liczba_osob,telefon) 
        VALUES($data,$osoby,$telefon)";
        echo $sql;
    if(mysqli_query($conn,$sql)){
        echo"dodano rezerwacje do bazy";
    }else{
        echo"error:".mysqli_error($conn);
    }


?>