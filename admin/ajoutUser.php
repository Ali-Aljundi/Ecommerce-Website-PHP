<?php

//appel authentification.php:::::include
include('../db/connexion.php');

//récupuration les doone du formulaire ajout user

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$login=$_POST['login'];
$pwd=$_POST['pwd'];

//requete SQL Insert

$sql= "INSERT INTO `user`(`nom`, `prenom`, `adresse`, `login`, `pwd`) 

VALUES ('$nom','$prenom','$adresse','$login','$pwd')";

//execution requete SQL

$result=mysqli_query($conn,$sql);

// retour a la page Gestion User

header("Location:gestion_user.php");








?>