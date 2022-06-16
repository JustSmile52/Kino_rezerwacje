<?php
    $link = mysqli_connect("localhost","root","", "bozek");
    
    
    if (isset($_POST['rejestruj']))
    {
        $login = $_POST['login'];
        $haslo1 = $_POST['haslo1'];
        $haslo2 = $_POST['haslo2'];
        if (mysqli_num_rows(mysqli_query($link,"SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)

        {
            if ($haslo1 == $haslo2) 
            {
                mysqli_query($link,"INSERT INTO `uzytkownicy` (`login`, `haslo`)
                    VALUES ('".$login."', '".md5($haslo1)."')");  
                echo "Konto zostało utworzone!";
                include("login.html");
            }
            else
             echo "Hasła nie są takie same, spróbuj jeszcze raz"; 
        }
        else
         echo "Podany login jest już zajęty.";
    }
?>