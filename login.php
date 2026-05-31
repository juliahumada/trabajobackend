<?php 

$usuario = $_POST ["usuario"]; 

$contrasenia = $_POST ["contrasenia"]; 

$ckuser = "admin";
$ckpass = "123";

if ($usuario == $ckuser && $contrasenia == $ckpass) {
header("location: https://www.potrerodigital.org/");
} else {
   header("location: error.html");
}

?>