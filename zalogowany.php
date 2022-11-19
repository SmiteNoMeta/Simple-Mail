<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('Location: logowanie.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    Brawo udało ci się zalogować
    <br>
    <br>
    Wyslij wiadomosci
    <a href="formpoczta.php">Wyslij mail</a><br>
    Zobacz maile
    <a href="wiadomosci.php">Wyswietl mail</a><br>
</body>
</html>