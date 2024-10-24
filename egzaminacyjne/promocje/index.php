<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sklep dla uczniów</title>
	<link rel="stylesheet" href="styl.css">
</head>
<body>
	<header><h1>Dzisiejsze promocje naszego sklepu</h1></header>
	<div id="all">
	<div id="lewy"><h2>Taniej o 30%</h2><ol>

	<?php

$con= mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "sklep");
$kwe_wyn1 = mysqli_query($con, "SELECT nazwa from towary WHERE promocja = 1; ");
while($row= mysqli_fetch_array($kwe_wyn1))
{
	echo "<li>".$row['nazwa']."</li>";
}

?>

	</ol></div>
		<div id="main"><h2>Sprawdź cenę</h2>
			<form method="post">
				<select name="sel">
					<option value="Gumka do mazania">Gumka do mazania</option>
					<option value="Cienkopis">Cienkopis</option>
					<option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
					<option value="Markery 4 szt.">Markery 4 szt.</option>
				</select>
				<input type="submit" value="SPRAWDŹ">
			</form>
			<div id="wyn">
				<?php 
				$con= mysqli_connect("localhost", "root", "");
				mysqli_select_db($con, "sklep");
				@$nazwa = $_POST['sel'];
				@$kwe_wyn2 = mysqli_query($con, "SELECT cena from towary WHERE nazwa='".$nazwa."';");
				while($row= mysqli_fetch_array($kwe_wyn2))
				{
					echo "cena regularna: ". $row['cena']."<br> cena w promocji 30%: ".$row['cena']*0.7;
				}	
			?></div>
		</div>
		<div id="prawy"><h2>Kontakt</h2>
	<p>e-mail: <a href="bok@sklep.pl">bok@sklep.pl</a></p>
	<img src="promocja.png" alt="promocja">
	</div></div>
	<footer><h4>Autor strony: Nikodem Miedziński</h4></footer>
	
</body>
</html>