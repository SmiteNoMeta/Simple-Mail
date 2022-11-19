<?php
session_start();
if (!isset($_SESSION['user'])) {
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
    <h1>Wyslij mail</h1> <br>
    <form action="formpoczta.php" method="post"><br>
    Podaj pseudonim adresata: <input type="text" name="email2"><br><br><br>
    <textarea name="tresc"></textarea>
    <input type="submit" value="Prześlij">
    <br><br><br><br>
    </form>
    <?php
        if ($_POST){
            $email = $_SESSION['user'];
            $email2 = $_POST['email2'];
            $tresc = $_POST['tresc'];

            if($email!="" && $email2!="" && $tresc!=""){
                $con = mysqli_connect('localhost','root','','poczta');
                $q = " INSERT INTO wysylanie VALUES ('$email','$email2','$tresc') ";
                mysqli_query($con, $q);
                mysqli_close($con);
                header('Location: zalogowany.php');
            }
        }
    ?>
</body>
</html