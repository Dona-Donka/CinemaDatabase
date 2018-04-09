<?php

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location:index.php');
		exit();
	}

	/* Znalezione gdzeiś w internecie */
	$mySelectedOption = $_POST['select1'];
    $query = "SELECT IdFilmu FROM seanse  = '{$mySelectedOption}'";
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
<label for="mySelectedOption">Film:</label> 
 <select mySelectedOption="select1">
   <option value="m">1</option>
   <option value="l">2</option>
   <option value="y">3</option>
 </select> </br>

<label for="imie">Data:</label> 
 <select id="">
   <option value="m">1</option>
   <option value="l">2</option>
   <option value="y">3</option>
 </select> </br>
	
 <br>Dane dotyczące miejsca: <br>
 <label for="imie">Rząd:</label> 
 <select id="">
   <option value="m">4</option>
   <option value="l">5</option>
   <option value="y">6</option>
 </select> </br>
 
 <label for="imie">Miejsce:</label> 
 <select id="">
   <option value="m">2</option>
   <option value="l">2</option>
   <option value="y">2</option>
 </select> </br>
	<br></br>
	<input type="submit" value="Zarezerwuj" />
	</form>
	</article>
</body>
</html>