<?php include 'header.php';?>



<link rel="stylesheet" href="../admin/CSS/design-admin.css">

 <!-- Font Awesome CDN-->
 <link
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>



  <link rel="stylesheet" href="../admin/CSS/design-form.css">


<h1>Add User</h1>

<form  class="form-inline" action="ajoutUser.php" method="POST">

<label>Nom</label>

<input name="nom" type="text">

<br>

<label>Prenom</label>

<input name="prenom" type="text">

<br>

<label>Adresse</label>

<input name="adresse" type="text">

<br>

<label>Login</label>

<input name="login" type="text">

<br>

<label>Password</label>

<input name="pwd" type="password">

<br>

<input type="submit" value="Ajouter User">

</form>
  

<h1>Gestion Users</h1>




<body>


<hr style="border-top: 1px solid red; border: 10px solid green;
  border-radius: 5px;">


<table id="table-admin">


  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Login</th>
    <th>Password</th>
    <th>Delete</th>
    <th>Modifier</th>

  </tr>
  

  <?php

  //appel authentification.php:::::include
  include('../db/connexion.php');

  //requete SQL Select
  //requete permet d'affcher tous les utliseurs de la base de donné
  $sql="SELECT * FROM `user`";

  //execution de requete SQL

  $result=$conn->query($sql);
  


  //parcourir result de requete SQL $result

  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
    ?>
    <tr>
      <td><?php echo $row['nom'];?></td>
      <td><?php echo $row['prenom'];?></td>
      <td><?php echo $row['adresse'];?></td>
      <td><?php echo $row['login'];?></td>
      <td><?php echo $row['pwd'];?></td>
      <td><a href="delete_user.php?id_user=<?php echo $row['id'];?>">delete  </td>
      <td><a href="modifier_user.php?
      id_user=<?php echo $row['id'];?>
      &&nom_user=<?php echo $row['nom'];?>
      &&prenom_user=<?php echo $row['prenom'];?>
      &&adresse_user=<?php echo $row['adresse'];?>
      &&login_user=<?php echo $row['login'];?>
      &&pwd_user=<?php echo $row['pwd'];?>
      
      
      ">edit  </td>
    </tr>

    <?php

   
  }

  ?>


  

  








  

</table>

</body>

<?php include 'footer.php';?>