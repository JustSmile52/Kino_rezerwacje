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
            $_GET['loggin_error'] = true;
            include('main.html');
            //exit()



        }
        else{
            

            $_GET['loggin_error'] = false;
            include('main.html');
            
        }
    }
?>