<?php
        $pseudonim = $_POST['pseudonim'];
        $haslo = $_POST['haslo'];
        $haslo1= $_POST['haslo1'];
        $plec = $_POST['plec'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $email = $_POST['email'];

        if ($pseudonim!="" && $imie!="" && $nazwisko!="" && $email !="" &&  $haslo !="" && $haslo1!=""){
            if($haslo==$haslo1){
                if(strlen($haslo)>8){
                            $con = mysqli_connect('localhost','root','','poczta');
                            $q = " INSERT INTO rejestracja
                                VALUES ('$pseudonim',MD5('$haslo'),'$plec','$imie','$nazwisko','$email')";
                            mysqli_query($con, $q);
                            mysqli_close($con);
                            echo("ZAREJSTROWANO!!");
                            header('Location: logowanie.php');
                }else{
                    echo("Haslo jest za krótkie");
                }
            }else{
                echo("Hasła są różne!!!");
            }
        }else{
            echo("Błąd nie uzupełniłeś pola!!!");
        }
?>