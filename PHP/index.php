<?php
$username = "root";
$servername = "localhost";

$conn = new mysqli($servername, $username);

session_start();
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
			header('Location:zal_glowna.php');
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
	<meta http-eqiuv="Content-Language" content="pl"/>
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
	<h1 style="font-seize:80px;">KINO KONESER</h1><br/><br/>
</header>

<nav>
	<p>Zaloguj się, jeśli chcesz zarezerwować miejsce:</p>
	<form action="zaloguj.php" method="post">
	Login: <br/><input type="text" name="login"/><br/>
	Hasło: <br/><input type="password" name="haslo"/><br/><br/>
	<input type="submit" value="Zaloguj sie"/>
	</form>
	


<?php

	if(isset($_SESSION['blad']))
	echo $_SESSION['blad'];
?>
	<form action="rejestracja.php"method="post">
	<input type="submit"value="Załóż konto"/>
	</form>

<form action="repertuar.php"method="post">
<br><input type = "submit"value = "REPERTUAR"/></br>
</form>

<form action="cennik.php"method="post">
<br><input type = "submit"value = "CENNIK"/></br>
</form>
	
</nav>
<aside>
<article class="article">
  <h1>Na ekranie:</h1>

  <h2>COCO</h2>
  
	<p> Bohaterem filmu jest Miguel.
  W jego rodzinie od pokoleń muzyka jest zakazana. 
  Jednak Miguel marzy, by pójść w ślady swojego idola, 
  wielkiego muzyka Ernesta de la Cruza.
  Zdesperowany chce udowodnić światu swój talent,
  a to – za sprawą serii przedziwnych wydarzeń – 
  -doprowadzi go do niezwykle kolorowej Krainy Umarłych. 
  Po drodze spotyka uroczego oszusta Hectora. 
  Wspólnie spróbują rozwikłać tajemnicę z przeszłości rodziny Miguela...
  </p>

<h2>BONE TOMAHAWK</h2>
  
  <p>
 Dziki Zachód, koniec XIX wieku. 
 Purvis (David Arquette) i Buddy napadają, 
 zabijają i okradają śpiących podróżnych. 
 Uciekając przed pościgiem, bezczeszczą groby niebezpiecznego plemienia. 
 Tubylcy w odwecie docierają do pobliskiego miasteczka Bright Hope,
 gdzie został zatrzymany w areszcie Purvis, 
 a następnie porywają jego i kilka innych osób. 
 Szeryf Franklin Hunt (Kurt Russell) organizuje pościg,
 w skład którego wchodzą: jego podstarzały zastępca (Richard Jenkins),
 lokalny dandys (Matthew Fox) oraz mąż jednej z porwanych (Patrick Wilson).
 Ich przeciwnika boją się nawet inni Indianie... 
 </p>

 <h2>SICARIO</h2>
  
  <p>
 Młoda agentka FBI Kate Macer przyłącza się do supertajnej akcji CIA
 mającej na celu pojmanie szefa wielkiego meksykańskiego kartelu narkotykowego.
 Macer stopniowo poznaje szczegóły operacji, która często ociera się
 o granicę prawa i moralności, prowadząc do najgłębszych czeluści przestępczego piekła.
 Przewodnikiem po jego kolejnych kręgach będzie dla Macer tajemniczy 
 współpracownik CIA o meksykańskim pochodzeniu, zwany "konsultantem",
 który jak się okaże ma dla całej akcji kluczowe znaczenie. 
 Jego prawdziwa tożsamość będzie dla Macer największym szokiem.
 </p>

</article>
</aside>

</form>

</body>
</html>
