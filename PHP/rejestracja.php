<?php
	$username = "root";
	$servername = "localhost";

	$conn = new mysqli($servername, $username);

	session_start();
	if(isset($_POST['email']))
	{
		//Walidacja Udana
		$wszystko_OK=true;
		
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

		if($haslo1!=haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo'] = "Podane hasła różnią się";
		}

		//Haszowanie hasła
		$haslo_hash = password_hash($haslo1,PASSWORD_DEFAULT);

		//Spr odz akceptacji regulaminu
		if(!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin'] = "Musisz zaakceptować regulamin";
		}

		if($wszystko_OK==true)
		{
			echo "Zostałeś zarejestrowany"; exit();
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
