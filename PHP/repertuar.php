<?php
	require_once"connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	$sql = "SELECT * FROM seanse";
	$records=mysqli_query($polaczenie, $sql);
	date_default_timezone_set('UTC');
?>

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

article,table { 

    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: gray;
	background-color: white;
    margin-left: 180px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}

</style>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Repertuar</title>
</head>
<body>
<table width="900" border = "1" cellpaddin ="1" cellspacing = "1">
<tr>
<th>Data</th>
<th>Godzina</th>
<th>Tytuł</th>
<th>Ilość dostępnych miejsc</th>
<th>Wersja językowa</th>

</tr>

<?php
session_start();
echo "Dzisiejsza data: ";
echo date("d.m.y");

	while($seanse=mysqli_fetch_assoc($records))
{
	echo "<tr>";
	
	echo "<td>".$seanse['Data']."</td>";
	echo "<td>".$seanse['Godzina']."</td>";
	echo "<td>".$seanse['IdFilmu']."</td>";
	echo "<td>".$seanse['Ilosc_miejsc']."</td>";
	echo "<td>".$seanse['Wersja_jezykowa']."</td>";
	echo"</tr>";
	
	/* echo "Dzisiejsza data: ";
echo date("d.m.y"); */
}

$polaczenie->close();
?>

</style>
</head>
<body>

<header>
	<h1 style="font-seize:80px;">REPERTUAR</h1><br/><br/>
	<tr></tr>
</header>

<nav>
<form action="index.php"method="post">
<input type = "submit"value = "Powrót"/>
</form>

<form action="filmy_na_ekranie.php"method="post">
<input type = "submit"value = "Filmy"/>
<br></br>
<form action="zaloguj.php"method="post">
<input type = "submit"value = "Rezerwacja"/>
</form>

</nav>
</body>
</html>
