<?php
    
    session_start();
    
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location:index.php');
        exit();
        
    }
    
    ?>

<?php
    require_once"connect.php";
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
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
<h1 style="font-seize:80px;">DZIĘKUJEMY ZA ZAMÓWIENIE!</h1><br/><br/>
<tr></tr>
</header>
<nav>
<form action="repertuar.php"method="post">
<br><input type = "submit"value = "REPERTUAR"/></br>
</form>



</nav>

<article>
<form action="zal_glowna.php"method="post">
<br><input type = "submit"value = "<-- POWRÓT DO STRONY GŁÓWNEJ "/></br>
</form>

<h1 Twoje zamówienie </h1>
<?php
    $seans = $_POST['nr_seansu'];
    $rzad = $_POST['rzad_mjsc'];
    $miejsce = $_POST['nr_mjsc'];
    //$bilet = $_POST['rodzaj_blt'];
    
    
    //Pobieranie danych dot seansu
    $records1=mysqli_query($polaczenie, "SELECT * FROM 'seanse' WHERE IdSeansu = '$seans';");
    
    //Pobieranie danych dot. zamwiajacego:
    //    $records2=mysqli_query($polaczenie, "SELECT * FROM klienci ");
    
    if(isset($_POST['potwierdzenie']))
    {
        $records_mjsc = "SELECT Ilosc_miejsc FROM seans WHERE IdSeansu = $seans";
        //tutaj ogarnać i poprawić!
        $desc_mjsc = mysqli_query($polaczenie, "UPDATE `seanse` SET `Ilosc_miejsc`=`Ilosc_miejsc`-1 WHERE `IdSeansu`='$seans';");
        
        $desc_mjsc = mysqli_query($polaczenie, "UPDATE `miejsca` SET `Dostepnosc`='Niedostepne' WHERE `Rzad`=`$rzad` AND `Numer`=`$miejsce`;");
        
        /*while($row = mysqli_fetch_array($desc_mjsc, MYSQLI_ASSOC))
         {
         echo"Pozostało wolnych miejsc: $row[Ilosc_miejsc]";
         }*/
    }
    
    
    
    
    ?>


</body>
</html>
