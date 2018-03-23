<?php
	$username = "root";
	$servername = "localhost";

	$conn = new mysqli($servername, $username);

	session_start();
	if(isset($_POST['email']))
	{
		//Walidacja Udana
		$wszystko_OK=true;
<<<<<<< HEAD
        
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
=======
>>>>>>> d26be9f9a0e83b52493f6437acb65a2db9fc33be
		
		//Sprawdzamy popr email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

		if ((FILTER_VAR($email, FILTER_SANITIZE_EMAIL)==false) || ($emailB!=$email))
		{
		$wszystko_OK = false;
		$_SESSION['e_mail'] = "Podany adres e-mail nie jest poprawny";
		}

		//Sprawdzamy popr hasła
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];

		if((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo'] = "Hasło musi zawierać się w 8-20 znakach";
		}

<<<<<<< HEAD
		if($haslo1!=$haslo2)
=======
		if($haslo1!=haslo2)
>>>>>>> d26be9f9a0e83b52493f6437acb65a2db9fc33be
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo'] = "Podane hasła różnią się";
		}

		//Haszowanie hasła
		//$haslo_hash = password_hash($haslo1,PASSWORD_DEFAULT);

		//Spr odz akceptacji regulaminu
		if(!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin'] = "Musisz zaakceptować regulamin";
		}
		
		require_once "connect.php";
		//Raportowanie błędów poprzez wyjątki - nie ost.
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if($polaczenie ->connect_errno!=0)
			{
				throw new Exception(mysqli_connet_errno());
			}
			else
			{
			//Czy email już istnieje
			
<<<<<<< HEAD
			$rezultat = $polaczenie->query("SELECT IdKlienta FROM Klienci WHERE Adres_email='$email'");
			if(!$rezultat) throw new Exception($polaczenie->error);
			
			if($rezultat->num_rows>0)
=======
			$rezultat = $polaczenie->query("SELECT IdKlienta FROM klienci WHERE Adres_email='$email'");
			if(!$rezultat) throw new Exception($polaczenie->error);
			
			$ile_takich_maili = $rezultat->num_rows;
			if($ile_takich_maili>0)
>>>>>>> d26be9f9a0e83b52493f6437acb65a2db9fc33be
				{
					$wszystko_OK=false;
					$_SESSION['e_mail']="Istnieje już konto o podanym adresie e-mail";
				}

		if($wszystko_OK==true)
		{
		//Dodawanie klienta do bazy
<<<<<<< HEAD
					if($polaczenie->query("INSERT INTO Klienci VALUES(NULL,'$imie','$nazwisko','$email','$haslo1')"))
=======
					if($polaczenie->query("INSERT INTO klienci VALUES(NULL,'$imie','$nazwisko','$email','$haslo')"))
>>>>>>> d26be9f9a0e83b52493f6437acb65a2db9fc33be
						{
							$_SESSION['udanarejestracja']=true;
							header('Location: strona_witaj.php');
						}
					else
					{
						throw new Exception($polaczenie->error);
					}
				}
			$polaczenie->close();
			}
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd servera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie</span';
			echo '<br/>Informacja developerska: '.$e;
		}

		
	}
	//<div class="g-recaptcha" data-sitekey="6LfIPRMTAAAAAPp0sKo5tCbQjTeELq2E9iaGVzZ5"></div>
?>

<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charser="utf-8"/>
	<meta http-eqiuv="Content-Language" content="pl"/>
	<title>Kino (nazwa) - zarejestruj się!</title>
<style>
header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

article {
	float: center;
    margin-left: 300px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
<body>

<header>

	<h1 style="font-seize:80px;">REJESTRACJA</h1><br/><br/>
</header>

<form method ="post">
	Imię: <br /> <input type="text" name = "imie" /><br/>
	Nazwisko: <br /> <input type="text" name = "nazwisko" /><br/>
	E-mail: <br /> <input type="text" name = "email" /><br/>
	<?php
			if (isset($_SESSION['e_mail']))
				{
					echo'<div class="error">'.$_SESSION['e_mail'].'</div>';
					unset($_SESSION['e_mail']);
				}
		?>
	Hasło: <br /> <input type="password" name = "haslo1" /><br/>
		<?php
		if (isset($_SESSION['e_haslo']))
			{
				echo'<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>
		Powtórz hasło: <br /> <input type="password" name = "haslo2" /><br/>
		
	<label>
		<input type="checkbox" name="regulamin"/> Akceptuję regulamin
	</label>
	<?php
		if (isset($_SESSION['e_regulamin']))
			{
				echo'<div class="error">'.$_SESSION['e_regulamin'].'</div>';
				unset($_SESSION['e_regulamin']);
			}
		?>
	
	<br/>
	<br/>

	<input type="submit" value="Zarejestruj się" />
</form>
</body>
</html>
