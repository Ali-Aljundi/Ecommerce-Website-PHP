<?php include 'header.php';?>
  

<h1>Gestion Contact</h1>


 <!-- Font Awesome CDN-->
 <link
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>



  <link rel="stylesheet" href="../admin/CSS/design-admin.css">

<body>


<hr style="border-top: 1px solid red; border: 10px solid green;
  border-radius: 5px;">

<table id="table-admin">


  <tr>
    <th>Id</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>Message</th>
    <th>Delete</th>
    <th>Modifier</th>

  </tr>

  <?php


//appel authentification.php:::::include
include('../db/connexion.php');

//requete SQL Select
//requete permet d'affcher tous les contact de la base de donné

$sql="SELECT * FROM `contact`";

//execution de requete SQL

$result=$conn->query($sql);


  //parcourir result de requete SQL $result

  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {

    ?>
    
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['nom'];?></td>
    <td><?php echo $row['prenom'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['telephone'];?></td>
    <td><?php echo $row['message'];?></td>
 
    <td><a href="delete_contact.php?id_contact=<?php echo $row['id'];?>">delete  </td>


      <td><a href="modifier_contact.php?
      id=<?php echo $row['id'];?>
      &&nom=<?php echo $row['nom'];?>
      &&prenom=<?php echo $row['prenom'];?>
      &&email=<?php echo $row['email'];?>
      &&telephone=<?php echo $row['telephone'];?>
      &&message=<?php echo $row['message'];?>
      
      
      ">edit  </td>
  </tr>

<?php

}

?>


</table>

</body>

<?php include 'footer.php';?>