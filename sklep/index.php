<!DOCTYPE HTML >
<head>
    <meta charset="UTF-8">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href=" styl.css">
</head>
<body>
<div id="baner">
		<h1>Dzisiejsze promocje naszego sklepu</h1>
	</div>
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
		<h3>Cena wybranego artykułu w promocji</h3>
		<form action="index.php" method="post">
			<select name="wybor">
				<option value="Gumka do mazania">Gumka do mazania</option>
				<option value="Cienkopis">Cienkopis</option>
				<option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
				<option value="Markery 4 szt.">Markery 4 szt.</option>
			</select>
			<button type="submit">WYBIERZ</button>
		</form>
		<?php
		    $produkt = $_POST['wybor'];
			$sql = "SELECT cena FROM towary WHERE nazwa = '$produkt'";
			$result = mysqli_query($conn, $sql);
			while($tab = mysqli_fetch_row($result)) {
                echo"<div id='cena'>";
                echo "cena regularna: ";
				$cena = ($tab[0]);
				echo "$cena"."<br>";
                echo"cena w promocji 30%:";
                $promocja=ROUND($tab[0]*0.7,2);
                echo $promocja;
                echo"</div>";
			}
		mysqli_close($conn);
		?>
	</div>
    <div id="prawy">
        <h2>Kontakt</h2><br>
        <p>Email:<a href="bok@sklep.pl">bok@sklep.pl<a></p>
        <img src="promocja.png" alt="promocja">

        
    </div>
    <div id="stopka">
        <h4>Stronę wykonała: Zuzanna Latoń</h4>
    </div>
</body>