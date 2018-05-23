<?php

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location:filmy_na_ekranie.php');
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
		//max-width: 100px;
		margin: 2;
		padding: 2em;
		background-color: white;
	}

	article,div { 

		display: div;
		padding: 1.7em;
		margin-left: 400px;
		overflow: hidden;
	}

	</style>

	<title>NA EKRANIE</title>
	</head>

	<header>
		<h1 style="font-seize:80px;">NA EKRANIE</h1><br/><br/>
		<tr></tr>
	</header>
	<nav>

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
	<form action="dostepne_miejsca.php"method="post">
		<br><input type = "submit"value = "Dostępne miejsca"/></br>
	</form> 
	</nav>

	<article>
	<h1 Zamówienie biletu </h1>


		<form action="zamowienie_miejsca.php" method="post">
			Wpisz numer seansu:
			<input type="int" name="nr_seansu" />
			<br></br>
			Wpisz rząd miejsca:
			<input type="text" name="rzad_mjsc" />
			<br></br>
			Wpisz numer miejsca:
			<input type="text" name="nr_mjsc" />
			<br></br>
		
	
			<input type="submit" value="Wyślij zamówienie">
		</form>
	
	<article 

	</body>
	</html>
	
