<?php
session_start();
$link = new mysqli("localhost","root","", "bozek");

$seans =  $_SESSION['seans'];
$login = $_SESSION['login'];


foreach($_GET['miejsce'] as $cos){
    $link->query("INSERT INTO `rezerwacje`( `seans`, `uzytkownik`, `miejsce`) VALUES ('$seans','$login','$cos')");
    //mysqli_query($link,"INSERT INTO `rezerwacje` (`seans`, `usytkownik`,`miejsce`) VALUES ('".$seans."', '".$login."','".$cos."')");
   
}
header("Location: main.php");
?>