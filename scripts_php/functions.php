<?php
function emptyInput($login, $pwd, $pwd2)
{
    if (empty($login) || empty($pwd) || empty($pwd2)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function pwdMatching($pwd, $pwd2)
{
    if ($pwd != $pwd2) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginExist($link, $login)
{
    if (mysqli_num_rows(mysqli_query($link, "SELECT login FROM uzytkownicy WHERE login = '" . $login . "';")) == 0) {
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}
function createUser($link, $login, $pwd)
{
    mysqli_query($link, "INSERT INTO `uzytkownicy` (`login`, `haslo`)
        VALUES ('" . $login . "', '" . md5($pwd) . "')");
    header('location: ../sites/register.php?error=none');
}




function emptyLoginInput($login, $pwd)
{

    if (empty($login) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginMatching($login, $pwd, $link)
{
    $wynik = $link->query("SELECT `login` , `haslo` FROM `uzytkownicy` WHERE login = '" . $login . "' AND `haslo` = '" . md5($pwd) . "'; ");
    if ($wynik->num_rows > 0) {
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}
function logInUser($link, $login)
{
    session_start();
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $stmt = $link->prepare("SELECT perms FROM uzytkownicy WHERE login = '$login'  limit 1  ;");
    $stmt->execute();
    $result = $stmt->get_result();
    $value = $result->fetch_object();
    $_SESSION['permission'] = $value->perms;
    $_SESSION['login'] = $login;
    header("Location:../sites/main.php");
}
