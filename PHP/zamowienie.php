<?php

	session_start();

	if(!isset($_SESSION['zalogowany']))
	{
		header('Location:index.php');
		exit();
	}

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

<title>REZERWACJA</title>
</head>

<header>
	<h1 style="font-seize:80px;">NA EKRANIE</h1><br/><br/>
	<tr></tr>
</header>


<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>LOGOWANIE </title>
</head>

<body>


<?php
	
	echo"<p> Witaj ".$_SESSION['user'].'![<a href="wyloguj.php">Wyloguj się!</a>]</p>';

?>
<nav>
	<form action="index.php"method="post">
	<br><input type = "submit"value = "Strona główna"/></br>
	</form>

	<form action="repertuar.php"method="post">
	<br><input type = "submit"value = "REPERTUAR"/></br>
	</form>

	<form action="filmy_na_ekranie.php"method="post">
	<br><input type = "submit"value = "Filmy"/></br>
	</form>
</nav>

<article>
<form method ="post">
<!--<label for="mySelectedOption">Film:</label> 
 <select name="select1">
   <option value="8">COCO</option>
   <option value="7">Bone Tomahawk</option>
   <option value="6">Sicario</option>
 </select> </br>

<label for="imie">Data:</label> 
 <select SelectDate="select2">
   <option value="date1">piątek 01.06</option>
   <option value="date2">sobota 02.06</option>
   <option value="date3">niedziela 03.06</option>
 </select> </br>
	
 <br>Dane dotyczące miejsca: <br>
 <label for="imie">Rząd:</label> 
 <select id="">
   <option value="rowA">A</option>
   <option value="rowB">B</option>
   <option value="rowC">C</option>
   <option value="rowD">D</option>
   <option value="rowE">E</option>
 </select> </br>
 
 <label for="imie">Miejsce:</label> 
 <select id="">
   <option value="place1">1</option>
   <option value="place2">2</option>
   <option value="place3">3</option>
   <option value="place4">4</option>
   <option value="place5">5</option>
   <option value="place6">6</option>
   <option value="place7">7</option>
   <option value="place8">8</option>
 </select> </br> -->

 <!-- Wybór filmu -->
	<label>
		<input type="checkbox" name="8"/> COCO
	</label>
	<label>
		<input type="checkbox" name="7"/> Bone Tomahawk
	</label>
	<label>
		<input type="checkbox" name "6"/> Sicario
	<br></br>

<!-- Wybór daty -->
		<label>
		<input type="checkbox" name="2018-06-01"/> piątek 01.06
	</label>
	<label>
		<input type="checkbox" name="2018-06-02"/> sobota 02.06
	</label>
	<label>
		<input type="checkbox" name "2018-06-03"/> niedziela 03.06
	<br></br>


	<br></br>
	<input type="submit" value="Zarezerwuj" />
	</form>

	<?php
	/*
		$select1=$_POST['select1'];
		$select2=$_POST['select2'];

		if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM seanse WHERE IdFilmu='%s' AND Data='%s'",
		mysqli_real_escape_string($polaczenie,$select1),mysqli_real_escape_string($polaczenie,$select2))))
			{
	
			} */
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if(isset($_POST['2018-06-01']))
				{
					$DateRes = "SELECT IdFilmu FROM seanse WHERE Date = 2018-06-01";
					if(isset($_POST['8']))
						{
							$IdSeansuRes = "SELECT IdSeansu FROM seanse WHERE IdFilmu = 8";
							$result = mysqli_query($polaczenie,$IdSeansuRes);
								$IdSeansuRes=$_POST['IdSeansuRes'];
                            echo "Wybrany seans: ".$_POST['IdSeansuRes'];
						}
					else if(isset($_POST['7']))
						{
							$IdSEansuRes = "SELECT IdSeansu FROM seanse WHERE Date = 7";
							$result = mysqli_query($polaczenie,$IdSeansuRes);
						}
					else 
						{
							$IdSEansuRes = "SELECT IdSeansu FROM seanse WHERE Date = 6";
							$result = mysqli_query($polaczenie,$IdSeansuRes);
						}
				}
			else if(isset($_POST['2018-06-02']))
				{
					$DateRes = "SELECT IdFilmu FROM seanse WHERE Date = 2018-06-02";
				}
			else 
				{
					$DateRes = "SELECT IdFilmu FROM seanse WHERE Date = 2018-06-03";
				}

	?>


		


	</article>
</body>
</html>
