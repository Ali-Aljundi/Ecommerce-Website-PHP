<?php

//parametre base de donné

$addresse ="localhost"; // localhost @ip 127.0.0.1
$basededonne="formation"; //nom de la base de donné
$user="root";
$password="";
// fin du declaration du parametre

//connexion base de donné
//mysqli_connect methode predefinie qui per la connexion au base de donné 
$conn=mysqli_connect($addresse,$user,$password,$basededonne);

?>