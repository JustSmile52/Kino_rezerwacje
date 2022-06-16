<?php
    $link = new mysqli("localhost","root","", "bozek");
    
    
    if (isset($_POST['login']))
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $wynik = $link->query("SELECT `login` , `haslo` FROM `uzytkownicy` WHERE login = '".$login."' AND `haslo` = '".md5($haslo)."'; ");
        if($wynik->num_rows>0)
        {

            session_start();
            $_SESSION['login']=$_POST['login'];
            header("Location: main.php");
            exit();



        }
        else echo "haslo lub login nieprawidlowe";
    }
?>