<?php
require_once '../db/db.php';
$seans =  $_SESSION['seans'];
$login = $_SESSION['login'];
$gecik = explode(',',$_GET['zajete'][0]);
echo '<p>'.$_GET['zajete'].'</p>';
foreach( $gecik as $cosik){
  $link->query("INSERT INTO `rezerwacje`( `seans`, `uzytkownik`, `miejsce`) VALUES ('$seans','$login','$cosik')");
 }
 header("Location: ../sites/main.php");
?>
