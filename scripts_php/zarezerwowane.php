<?php

require_once '../db/db.php';

$seans =  $_SESSION['seans'];
$login = $_SESSION['login'];


// foreach($_GET['miejsce'] as $cos){
//     $link->query("INSERT INTO `rezerwacje`( `seans`, `uzytkownik`, `miejsce`) VALUES ('$seans','$login','$cos')");
//     //mysqli_query($link,"INSERT INTO `rezerwacje` (`seans`, `usytkownik`,`miejsce`) VALUES ('".$seans."', '".$login."','".$cos."')");
   
// };
$gecik = explode(',',$_GET['zajete'][0]);
echo '<p>'.$_GET['zajete'].'</p>';


 foreach( $gecik as $cosik){
$link->query("INSERT INTO `rezerwacje`( `seans`, `uzytkownik`, `miejsce`) VALUES ('$seans','$login','$cosik')");
//     //mysqli_query($link,"INSERT INTO `rezerwacje` (`seans`, `usytkownik`,`miejsce`) VALUES ('".$seans."', '".$login."','".$cos."')");
   echo "<p>$cosik</p>";
 }
 header("Location: ../sites/main.php");
?>
