
 <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="5INB1";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    echo "connect saccesfully<br>";
   
    $name=$_GET['name'];
    $email=$_GET['email'];
    
    $sql="INSERT INTO MYGuests(firstNAME,email)
         VALUES ('$name','$email')";
    if(mysqli_query($conn,$sql)){
        echo "new record created saccessfuly";
    }else{
        echo"Error:".$sql."<br>".mysqli_error($conn);
    }
    ?>  

welcome<?php echo $_GET['name'];?><br>
Your E-mail is: <?php echo $_GET['email'];?>

