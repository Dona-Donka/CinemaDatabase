<?php
	session_start();

		if((!isset($_SESSION['udanarejestracja'])));
			{
				header('Location:index.php');
				exit();
			}
			//tutaj wywala błąd XD
		/*else
			{
				unset($_SESSION['udanarejestracja']);
			} */
?>

<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charser="utf-8"/>
	<meta http-eqiuv="Content-Language" content="pl"/>
<style>
</style
<body>
Dziękujęmy za wykonanie rejestracji<br></br>
<a href="index.php">Zaloguj się na swoje konto</a>
</body>
</html>
