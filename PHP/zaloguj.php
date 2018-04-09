<?php

	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}
	
	require_once "connect.php";
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if($polaczenie->connect_errno!=0)
	{
			echo "Error.".$polaczenie->connect_errno;
	}	
	else
	{
			$login=$_POST['login'];
			$haslo=$_POST['haslo'];
			
			$login = htmlentities($login,ENT_QUOTES,"UTF-8");
			$haslo = htmlentities($haslo,ENT_QUOTES,"UTF-8");

			
			if($rezultat = @$polaczenie->query(sprintf("SELECT *FROM klienci WHERE Adres_email='%s' AND Haslo='%s'",mysqli_real_escape_string($polaczenie,$login),mysqli_real_escape_string($polaczenie,$haslo))))
			{
					$ilu_userow = $rezultat->num_rows;
					if($ilu_userow>0)
					{
						$_SESSION['zalogowany']=true;
						
						$wiersz = $rezultat->fetch_assoc();
						$_SESSION['user'] = $wiersz['Nazwisko'];
						
						unset($_SESSION['blad']);
						$rezultat->free_result();
						header('Location:zamowienie.php');
					}
					else
					{
							$_SESSION['blad']='<span style="color:red"> Nieprawidłowy login lub hasło!</span>';
							header('Location: index.php');
						
						
					}
				
			}
			
			$polaczenie->close();
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

<title>NA EKRANIE</title>
</head>

<header>
	<h1 style="font-seize:80px;">NA EKRANIE</h1><br/><br/>
	<tr></tr>
</header>


<!--<article>
<div>
      <img src="sicario1.jpg" alt="sicario1" />
</div>
<article -->

</body>
</html>



