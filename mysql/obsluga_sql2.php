<?php
    $servername="localhost";
    $username="root";
    $password="";
    $conn=mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    echo "connect saccesfully<br>";
    $database="5INB1";
    $sql="CREATE DATABASE $database";
    if(mysqli_query($conn,$sql)){
        echo"database created successfully<br>";
    }else{
        echo"Error creating database:<br>".mysqli_error($conn);
    }
    if(mysqli_select_db($conn,$database)){
        echo"<br>database $database selected";
    }else{
        echo"Error select database:";
    }
    $sql="CREATE TABLE MyGuests(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstNAME VARCHAR(30) NOT NULL,
            lastName VARCHAR(30) NOT NULL,
            email VARCHAR(30),
            reg_date TIMESTAMP DEFAULT
                CURRENT_TIMESTAMP ON UPDATE
                CURRENT_TIMESTAMP
    )";
if (mysqli_query($conn,$sql)){
    echo "Table myGuests created succesfully";
}else{
    echo"error creating table:".mysqli_error($conn);
}
$sql="INSERT INTO MYGuests(firstNAME,lastName,email,reg_date)
        VALUES ('','John','Doe','john.doe@gmail.com')";
$sql .="INSERT INTO MYGuests(firstNAME,lastName,email,reg_date) 
        VALUES ('','Jan','kowalski','jan.kowalski@gmail.com')";
$sql .="INSERT INTO MYGuests(firstNAME,lastName,email,reg_date) 
        VALUES('','dawid','skalski','dawid.skalski@gmail.com')";
$sql .="INSERT INTO MYGuests(firstNAME,lastName,email,reg_date) 
        VALUES('','Kamil','Nowak','kamil.nowak@gmail.com')";
if (mysqli_mulit_query($conn,$sql)){
    echo "new record created succesfully";
}else{
    echo"error:".mysqli_error($conn);
}

?>