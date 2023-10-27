<style>
    table{
        border-collapse:collapse;
    }
    table,td{
        border:1px solid;
    }
</style>



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
    // $sql="CREATE DATABASE $database";
    // if(mysqli_query($conn,$sql)){
    //     echo"database created successfully<br>";
    // }else{
    //     echo"Error creating database:<br>".mysqli_error($conn);
    // }
    if(mysqli_select_db($conn,$database)){
        echo"<br>database $database selected";
    }else{
        echo"Error select database:";
    }
//     $sql="CREATE TABLE MyGuests(
//             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//             firstNAME VARCHAR(30) NOT NULL,
//             lastName VARCHAR(30) NOT NULL,
//             email VARCHAR(30),
//             reg_date TIMESTAMP DEFAULT
//                 CURRENT_TIMESTAMP ON UPDATE
//                 CURRENT_TIMESTAMP
//     )";
// if (mysqli_query($conn,$sql)){
//     echo "Table myGuests created succesfully";
// }else{
//     echo"error creating table:".mysqli_error($conn);
// }
// $sql="INSERT INTO MYGuests(firstNAME,lastName,email,reg_date)
//         VALUES ('','John','Doe','john.doe@gmail.com')";
// $sql .="INSERT INTO MYGuests(firstNAME,lastName,email,reg_date) 
//         VALUES ('','Jan','kowalski','jan.kowalski@gmail.com')";
// $sql .="INSERT INTO MYGuests(firstNAME,lastName,email,reg_date) 
//         VALUES('','dawid','skalski','dawid.skalski@gmail.com')";
// $sql .="INSERT INTO MYGuests(firstNAME,lastName,email,reg_date) 
//         VALUES('','Kamil','Nowak','kamil.nowak@gmail.com')";
// if (mysqli_mulit_query($conn,$sql)){
//     echo "new record created succesfully";
// }else{
//     echo"error:".mysqli_error($conn);
// }
// $sql="INSERT INTO MYGuests(firstNAME,lastName,email,reg_date)
// //         VALUES ('','Dawid','Stocki','dawid.stocki@gmail.com')";
// if(mysqli_query($conn,$sql)){
//          echo"guest added succesfully <br>";
//      }else{
//         echo"Error added user:<br>".mysqli_error($conn);
//      }
/////////////////////////////////////////////////////////////////////////////////////
$sql="SELECT id, firstNAME, lastName FROM MyGuests";
$result=mysqli_query($conn,$sql);
echo mysqli_error($conn);
/////////////////////////////////////////////////////////////////////////////////////////////
// if(mysqli_num_rows($result)>0){
//     while($row=mysqli_fetch_assoc($result)){
//         echo "id: ".$row["id"]." name:".$row["firstNAME"].
//         " lastname".$row["lastName"]."<br>";
//     }

// }else{
//     echo "0 result";
//     }
//////////////////////////////////////////////////////////////////////////////////
// if(mysqli_num_rows($result)>0){
//     while ($row=mysqli_fetch_row($result)){
//         echo"id: ".$row[0]."Name ".$row[1]." lastname".$row[2]."<br>";
//     }
// }
// else{
//     echo "0 result";
// }
///////////////////////////////////////////////////////////////////////////////////
// if(mysqli_num_rows($result)>0){
//     echo "<table>";
//     while ($row=mysqli_fetch_row($result)){
//         echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
//     }
//     echo"</table>";
// }else{
//     echo"0 results";
// }
/////////////////////////////////////////////////////////////////////////////////////////
if(mysqli_num_rows($result)>0){
    echo "<ul>";
    while ($row=mysqli_fetch_row($result)){
        echo "<li>".$row[0]." ".$row[1]," ". $row[2]."</li>";
}
    echo "</ul>";
}else{
   echo"0 results";
}
///////////////////////////////////////////////////////////////////////////
$sql="DELETE FROM myGuests WHERE id=3";
if(mysqli_query($conn,$sql)){
    echo "record deleted successfully"."<br>";
}else{
    echo"Error deleting record:".mysqli_error($conn);
}
////////////////////////////////////////////////////////////////////////
$sql="UPDATE myGuests SET lastName='Doe' WHERE id=2";
if(mysqli_query($conn,$sql)){
    echo "record update successfully";
}else{
    echo"Error update record:".mysqli_error($conn);
}


<form action="form_post.php"method="post">
    Name:<input type="text" name="name"><br>
    E-mail:<input type="text" name="email"><br>
    <input type="submit">
</form>

    $name=$_POST["name"];
    $email=$_POST["email"];
    $sql="INSERT INTO MYGuests(firstNAME,email)
         VALUES ("$name",'$email')";
    if(mysqli_query($conn,$sql)){
        echo "new record created saccessfuly";
    }else{
        echo"Error:".$sql."<br>".mysqli_error($conn);
    }
    ?>