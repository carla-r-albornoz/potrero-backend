<?php

$usuario = $_POST ["user"];
$clave = $_POST ["pass"];

$okuser = "admin";
$okpass = "1234";

if ($usuario == $okuser && $clave == $okpass) {
  header ("location: https://compromisodigital.ar/");
}else{
  header ("location: error.html");
}

 ?>
