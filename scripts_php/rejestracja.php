<?php
    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $pwd = $_POST['haslo1'];
        $pwd2 = $_POST['haslo2'];
       require_once '../db/db.php';
       require_once 'functions.php';
//errors
        if(emptyInput( $login, $pwd, $pwd2)){
            header('location: ../sites/register.php?error=emptyInput');
            exit();
            }
        if(pwdMatching( $pwd, $pwd2)){
            header('location: ../sites/register.php?error=pwdMatching');
            exit();
            }
        if(loginExist($link, $login)){
            header('location: ../sites/register.php?error=loginAlreadyExists');
            exit();
        }
//works
       createUser($link, $login, $pwd);
    }
     else{
        header('location:../sites/register.php');
        exit();
    }
    
?>
