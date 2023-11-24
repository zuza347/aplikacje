<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div id="lewy1">
    <h3>Ryby zamieszkujące rzeki</h3>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $conn=mysqli_connect($servername,$username,$password);
        $database="wedkowanie";
        mysqli_select_db($conn,$database);
        $sql="SELECT ryby.nazwa,lowisko.akwen,lowisko.wojewodztwo FROM ryby, lowisko WHERE 
        ryby.id=lowisko.Ryby_id AND ryby.wystepowanie LIKE '%rzeki%'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
           echo "<ol>";
            while ($row=mysqli_fetch_row($result)){
                $nazwa=$row['0'];
                $akwen=$row['1'];
                $wojewydztwo=$row["2"];
                echo "<li>".$nazwa." pływa w rzece ".$akwen.",".$wojewydztwo."</li>";
               
            }
            echo "</ol>";
        }
    ?>

    </div>
    <div id="prawy">
        <img src="ryba1.jpg" alt="sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
        <?php
            $sql="SELECT id,nazwa,wystepowanie FROM ryby WHERE styl_zycia=1";
            $result=mysqli_query($conn,$sql);
            if(mysqli_fetch_row($result)>0){
                echo"<table><th>L.p</th><th>Gatunek</th><th>Występowanie</th>";
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $nazwa=$row['nazwa'];
                    $wystepowanie=$row['wystepowanie'];
                    echo"<td><tr>".$id."</tr><tr>".$nazwa."</tr><tr>".$wystepowanie."</tr></td>";
                }
                echo"</table>";
            }
           
        ?>
    </div>
    
    <div id="stopka">
        <p>Stronę wykonała; Zuzanna Latoń</p>
    </div>
</body>
</html>