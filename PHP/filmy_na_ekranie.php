<?php
	require_once"connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

		$sql = "SELECT * FROM filmy";
	$records=mysqli_query($polaczenie, $sql);
	date_default_timezone_set('UTC');
 
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
	<h1 style="font-seize:80px;">NA EKRANIE</h1><br/><br/>
	<tr></tr>
</header>

<tr>
<article>
<div>
      <img src="sicario1.jpg" alt="sicario1" />
</div>
<article
	</html>
