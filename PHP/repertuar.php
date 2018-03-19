<?php
	require_once"connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	$sql = "SELECT * FROM filmy";
	$records=mysqli_query($polaczenie, $sql);
	date_default_timezone_set('UTC');
	/*
	if($polaczenie->connect_errno!=0)
	{
		echo"Error";
	}

	else {

	$dzisiaj = $_POST['dzisiaj']; 
	$haslo = $_POST['jutro'];

	mysql_select_db("filmy");
	
	while(mysql_fetch_array(mysql_query("select * from filmy")))
	(
		echo(mysql_fetch_array(mysql_query("select * from filmy")))["Gatunek"];
		echo "<br>";
	)
	$polaczenie->close();

	while($filmy=mysqli_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".$filmy['Gatunek']."</td>";
	echo"<td>".$filmy['Tytul']."</td>";
	echo"</tr>";
}
	} */
?>

<html lang = "pl">
<head>
<style>
table { 
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: gray;
	background-color: white;
}
</style>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Repertuar na dziś</title>
</head>
<body>
<table width="900" border = "1" cellpaddin ="1" cellspacing = "1">
<tr>
<th>Data</th>
<th>Godzina</th>
<th>Tytuł</th>
<th>Gatunek</th>
<th>Ograniczenia wiekowe</th>

</tr>

<?php
session_start();
echo "Dzisiejsza data: ";
echo date("m.d.y");

	while($filmy=mysqli_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".date("m.d.y")."</td>";
	echo "<td>17.00</td>";
	echo"<td>".$filmy['Tytul']."</td>";
	echo "<td>".$filmy['Gatunek']."</td>";
	echo "<td>".$filmy['Ograniczenia_wiekowe']."</td>";
	echo"</tr>";
	
}

$polaczenie->close();
?>
</body>
</html>
