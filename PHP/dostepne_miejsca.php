<?php
	require_once"connect.php";
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	$sql = "SELECT * FROM miejsca";
	$records=mysqli_query($polaczenie, $sql);

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
	float: center;
    margin-left: 500px;
    padding: 1em;
    overflow: hidden
}

</style>

<title>MIEJSCA</title>
</head>

<header>
	<h1 style="font-seize:80px;">DOSTĘPNE MIEJSCA</h1><br/><br/>
	<tr></tr>
</header>



<header>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Cennik</title>
</header>
<body>
<table width="600" border = "1" cellpaddin ="1" cellspacing = "1">

<article>
<table width="250" border = "1" cellpaddin ="1" cellspacing = "1">
<tr>
<th>Rząd</th>
<th>Miejsce</th>
<th>Dostępność</th>


</tr>
</article>

<?php
session_start();

	while($miejsca=mysqli_fetch_assoc($records))
{
	echo "<tr>";
	
	echo "<td>".$miejsca['Numer']."</td>";
	echo "<td>".$miejsca['Rzad']."</td>";
	echo "<td>".$miejsca['Dostepnosc']."</td>";


	echo"</tr>";
	
	/* echo "Dzisiejsza data: ";
echo date("d.m.y"); */
}

$polaczenie->close();
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

</body>
</html>

