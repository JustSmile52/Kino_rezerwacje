<?php
 function emptyInput( $login, $pwd, $pwd2){
    $result = true;
    if(empty($login)||empty($pwd)||empty($pwd2)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
 }
 function pwdMatching( $pwd, $pwd2){
    $result = true;
    if($pwd != $pwd2){
        $result = true;
        }
    else{
        $result = false;
        }
        return $result;
 }
 function loginExist($link, $login){
    if (mysqli_num_rows(mysqli_query($link,"SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0){
        $result = false;
        }
    else{
        $result = true;
        }
        return $result;
 }
 function createUser($link, $login, $pwd){
    mysqli_query($link,"INSERT INTO `uzytkownicy` (`login`, `haslo`)
        VALUES ('".$login."', '".md5($pwd)."')");  
    header('location: ../sites/register.php?error=none');
 }
