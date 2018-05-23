<?php

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location:index.php');
		exit();

	}

?>

<?php
	require_once"connect.php";
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
?>

		<!DOCTYPE HTML>
		<html lang = "pl">
	<head>
	<style>
	header, footer {
		padding: 1em;
		color: white;
		background-color: black;
		clear: left;
		text-align: center;
	}

	nav {
		float: left;
		max-width: 100px;
		margin: 2;
		padding: 2em;
		background-color: white;
	}

	article,div { 

		display: div;
		margin-left: 100px;
		overflow: hidden;
	}

	</style>

	<title>NA EKRANIE</title>
	</head>

	<header>
		<h1 style="font-seize:80px;">PODSUMOWANIE ZAMÓWIENIA</h1><br/><br/>
		<tr></tr>
	</header>
	<nav>
	<form action="repertuar.php"method="post">
		<br><input type = "submit"value = "REPERTUAR"/></br>
	</form>


	
	</nav>

	<article>
	<form action="filmy_na_ekranie.php"method="post">
		<br><input type = "submit"value = "<-- POWRÓT DO ZAMÓWIENIA "/></br>
	</form>

	<h1 Twoje zamówienie </h1>
		<?php
			$seans = $_POST['nr_seansu'];
			$rzad = $_POST['rzad_mjsc'];
			$miejsce = $_POST['nr_mjsc'];
			//$bilet = $_POST['rodzaj_blt'];
			

			//Pobieranie danych dot seansu
			$records1=mysqli_query($polaczenie, "SELECT * FROM seanse WHERE IdSeansu = '$seans';");
		
			//Pobieranie danych dot. zamwiajacego:
		//	$records2=mysqli_query($polaczenie, "SELECT * FROM klienci ");

			echo"<h2>Twoje zamowienie</h2>";
			echo"<table border='1' cellpadding='10' cellspacing='0'>";
			

				echo"<tr>";
					while($row = mysqli_fetch_array($records1, MYSQLI_ASSOC))
					{echo"<td>Data: $row[Data], Godzina: $row[Godzina]</td>";
					 echo "<td>TUTAJ NAZWA FILMU</td>";
				echo"</tr>";

				echo"<tr>"	;
					//while($row = mysqli_fetch_array($records2, MYSQLI_ASSOC))
					echo"<td>Nazwisko zamawiającego: $_SESSION[user]</td> <td>Miejsce: $rzad$miejsce</td>" ;
				echo"</tr>";

				echo"<tr>"	;
					echo"<td>KOD: $_SESSION[user]-$row[IdSeansu]-$rzad$miejsce </td> <td>Cena: 10zł</td>";
				echo"</tr>";}
	
				echo"</table>";
			
				

			
		?>

            <form action="potwierdzenie.php" method="post">
				<br></br>
                <input type="hidden" name="nr_seansu" value="<?php echo $seans;?>"/>
                <input type="hidden" name="rzad_mjsc" value="<?php echo $rzad;?>"/>
                <input type="hidden" name="nr_mjsc" value="<?php echo $miejsce;?>"/>
				<input type="submit" value="Potwierdzam zamówienie" name = "potwierdzenie">
			</form>


	<article 

	</body>
	</html>

