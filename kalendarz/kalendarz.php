<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <div id="baner1">
        <img src="logo1.png" alt="Mój kalendarz">

    </div>
    <div id="baner2">
        <h2>KALENDARZ</h2>
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $db="egzamin5";
            $conn=mysqli_connect($servername,$username,$password,$db);
            $sql="SELECT miesiac,rok FROM zadania WHERE dataZadania='2020-07-01'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo"<h3>Miesiąc: ".$row['miesiac']." rok ".$row["rok"];
                }
            }
        ?>
            </div>
    <div id="glowny">
       <?php
            $sql="SELECT dataZadania, wpis FROM zadania WHERE miesiac='lipiec'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                
                while($row=mysqli_fetch_row($result)){
                    echo "<div id='zadanie'><h5>".$row[0]."</h5><p>".
                    $row[1]."</p></div>";
                }
            }
       ?>
    </div>

    
    <div id="stopka">
        <form method="post">
            <label for="wpis"> dodaj wpis</label>
            <input type="text" id="wpis" name="wpis">
            <input type="submit" value="DODAJ">
        </form>
        <?php
        $wpis=$_POST['wpis'];
        $sql="UPDATE zadania SET wpis=$wpis WHERE dataZadania='2020-07-13'";
        ?>
    
   
    </div>
  
</body>
</html>