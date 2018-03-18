<?php

	session_start();
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
			header('Location:zamowienie.php');
			exit();
	}
?>

<?php

$username = "root";
$servername = "localhost";

$conn = new mysqli($servername, $username);
/*
function get_buttons() 
	{
		$str='';
		$btns = array(
			1=>'poniedzia³ek',
			2=>'wtorek',
			3=>'œroda',
			4=>'czwartek',
			5=>'pi¹tek',
			6=>'sobota',
			7=>'niedziela',
		);
	return $str;
	} */
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
    float: center;
    max-width: 160px;
    margin: 0;
    padding: 1em;
	background-color: white;

}

</style>
</head>
<body>

<header>
	<h1 style="font-seize:80px;">NA EKRANIE</h1><br/><br/>
</header>

<nav>

	<form action="zaloguj.php" method="post">
	Login: <br/><input type="text" name="login"/><br/>
	Has³o: <br/><input type="password" name="haslo"/><br/><br/>
	<input type="submit" value="Zaloguj sie"/>
	</form>

<?php

	if(isset($_SESSION['blad']))
	echo $_SESSION['blad'];
?>

	<input type="submit"value="Za³ó¿ konto"/>


<form action="repertuar.php"method="post">
<input type = "submit"value = "dzisiaj"/>
<input type = "submit"value = "jutro"/>
<input type = "date"value = "dd/mm/yyyy"/>
</nav>


</form>

</body>
</html>