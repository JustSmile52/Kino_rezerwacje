<?php
    
    if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $pwd = $_POST['haslo1'];
        $pwd2 = $_POST['haslo2'];
       require_once '../db/db.php';
       require_once 'functions.php';
//errors

        if(emptyInput( $login, $pwd, $pwd2)){
            header('location: ../sites/main/php?error=emptyInput');
            exit();
            }
        if(pwdMatching( $pwd, $pwd2)){
            header('location: ../sites/main/php?error=pwdMatching');
            exit();
            }
        if(loginExist($link, $login)){
            header('location: ../sites/main/php?error=loginAlreadyExists');
            exit();
        }



//works
       createUser($link, $login, $pwd);
               
                // if (mysqli_num_rows(mysqli_query($link,"SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)

                // {
                //     if ($haslo1 == $haslo2) 
                //     {
                        // mysqli_query($link,"INSERT INTO `uzytkownicy` (`login`, `haslo`)
                        //     VALUES ('".$login."', '".md5($haslo1)."')");  
                        // echo "Konto zostało utworzone!";
                        // header('location: ../sites/main.php');
                //     }
                //     else
                //     echo "Hasła nie są takie same, spróbuj jeszcze raz"; 
                // }
                // else
                // echo "Podany login jest już zajęty.";
            


    }
     else{
        header('location:../sites/main.php');
        exit();
    }
    
?>
