<?php

if (isset($_POST['log'])) {

    require_once '../db/db.php';
    require_once 'functions.php';
    //jak dziala
    if (isset($_POST['login']) && isset($_POST['haslo'])) {
        $login = $_POST['login'];
        $pwd = $_POST['haslo'];

        //errors
        if (emptyLoginInput($login, $pwd)) {
            header('location: ../sites/main.php?error=emptyInput');
            exit();
        }
        if (loginMatching($login, $pwd, $link)) {
            header('location: ../sites/main.php?error=loginMatching');
            exit();
        }

        logInUser($link, $login);
        //  $login = $_POST['login'];
        //  $haslo = $_POST['haslo'];
        //  $wynik = $link->query("SELECT `login` , `haslo` FROM `uzytkownicy` WHERE login = '".$login."' AND `haslo` = '".md5($haslo)."'; ");
        //  if($wynik->num_rows>0)
        //  {
        //      session_start();
        //      $_SESSION['login']=$_POST['login'];
        //      $_GET['loggin_error'] = true;
        //      header("Location:../sites/main.php");
        //      //exit()
        //  }
        //  else{
        //      $_GET['loggin_error'] = false;
        //      include("Location:../sites/main.php");
        //  }
    }
} else {
    header('location: ../sites/main.php');
}
