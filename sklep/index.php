<!DOCTYPE HTML >
<head>
    <meta charset="UTF-8">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href=" styl.css">
</head>
<body>
    <div id="baner">
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </baner>
    <div id="lewy">
        <h2>Taniej o 30%</h2>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $conn=mysqli_connect($servername,$username,$password);
        $database="sklep";
        mysqli_select_db($conn,$database);
        $sql="SELECT nazwa FROM towary WHERE promocja=1";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "<ol type='a'>";
            while ($row=mysqli_fetch_assoc($result)){
                $nazwa=$row['nazwa'];
                echo "<li>".$nazwa."</li>";
            }
            echo "</ol>";
        }
        ?>
    </div>
    <div id="srodkowy">
        <h2>Sprawdź cenę</h2>
        <form method="POST">
            <select name="przybory">
                <option value="gumka" name='Gumka do mazania'>Gumka do mazania</option>
                <option value="cienkopis" name="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60 szt." name="Pisaki 60 szt.">Pisaki 60 szt.</option>
                <option value="marker" name="Markery 4 szt.">Markery 4 szt.</option>
            </select>
           <input type="submit" value="sprawdz">
          </form>
          <?php
          $nazwa=$_POST['przybory'];
          $sql= "SELECT cena FROM towary WHERE nazwa='$nazwa'";
            $result=mysqli_fetch_assoc($sql);
            echo "cena;".$result['cena'];
            echo $result;

          ?>
          
    </div>
    <div id="prawy">
        <h2>Kontakt</h2>
        <p>e-mail:
            <a href="bok@sklep.pl">bok@sklep.pl</a>
            <img src="promocja.png" alt="promocja">

        </p>
    </div>
    <div id="stopka">
        <h4>Stronę wykonała: Zuzanna Latoń</h4>
    </div>
</body>