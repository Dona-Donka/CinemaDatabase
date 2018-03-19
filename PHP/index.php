<?php
$username = "root";
$servername = "localhost";

$conn = new mysqli($servername, $username);

session_start();
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
			header('Location:zamowienie.php');
			exit();
	}

	$sql = "SELECT * FROM filmy";
	$records=mysqli_query($conn, $sql);
	date_default_timezone_set('UTC');

?>

<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charser="utf-8"/>
	<meta http-eqiuv="X-UA-Compatibile" content="IE=edge,chrome=1"/>
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
    max-width: 160px;
    margin: 2;
    padding: 2em;
	background-color: white;
}

article {
	float: center;
    margin-left: 300px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}

table, th, td {
    border: 1px solid black;
	}
</style>
</head>
<body>

<header>
	<h1 style="font-seize:80px;">KINO (jakaś nazwa)</h1><br/><br/>
</header>

<nav>

	<form action="zaloguj.php" method="post">
	Login: <br/><input type="text" name="login"/><br/>
	Hasło: <br/><input type="password" name="haslo"/><br/><br/>
	<input type="submit" value="Zaloguj sie"/>
	</form>

<?php

	if(isset($_SESSION['blad']))
	echo $_SESSION['blad'];
?>

	<input type="submit"value="Załóż konto"/>


<form action="repertuar.php"method="post">

<br><input type = "submit"value = "REPERTUAR"/></br>

</nav>
<aside>
<article class="article">
  <h1>Na ekranie:</h1>

  <h2>COCO</h2>
  
  <table>
  <tr>

    <th>Czas Trwania</th>
	<th>Reżyser</th>
	<th>Rok wydania</th>
	<th>Gatunek</th>
	<th>Czas Trwania</th>
	<th>Ograniczenia_wiekowe</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$80</td>
  </tr>
</table>

<h2>BONE TOMAHAWK</h2>
  
  <table>
  <tr>

    <th>Czas Trwania</th>
	<th>Reżyser</th>
	<th>Rok wydania</th>
	<th>Gatunek</th>
	<th>Czas Trwania</th>
	<th>Ograniczenia_wiekowe</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$80</td>
  </tr>
</table>

</article>
</aside>

</form>

</body>
</html>
