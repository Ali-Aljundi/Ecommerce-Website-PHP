<?php

//appel  cxion.php:::::include
include('../db/connexion.php');
//récupuration l id user 

$id_user=$_GET['id_user'];

//requete SQL delete
$sql="DELETE FROM `user` where id='$id_user'";
//execution requete SQL

$result=mysqli_query($conn,$sql);
// retour a la page Gestion User

header("Location:gestion_user.php");


?>