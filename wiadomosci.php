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
    <?php           
        $con = mysqli_connect('localhost','root','','poczta');
        $pseudonim = $_SESSION['user'];
        $q = " SELECT nadawca, adresat, tresc FROM wysylanie WHERE nadawca = '$pseudonim' OR adresat = '$pseudonim' ";
        $data = mysqli_query($con, $q);
        while($row = mysqli_fetch_array($data)) {
            $mail = $row['nadawca'];
            $mail2 = $row['adresat'];
            $mail3 = $row['tresc'];
            echo "Od ". $mail ."<br>";
            echo "Do ". $mail2 ."<br>";
            echo "Tresc: ". $mail3 ."<br>"."<br>"."<br>"."<br>";
        }
        mysqli_close($con);
    ?>
    </br></br></br></br>
    <a href="zalogowany.php">Powrot</a><br>
</body>
</html>