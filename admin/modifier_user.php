<?php include 'header.php';?>



<link rel="stylesheet" href="../admin/CSS/design-admin.css">

 <!-- Font Awesome CDN-->
 <link
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>



  <link rel="stylesheet" href="../admin/CSS/design-form.css">


<h1>Modifier User</h1>

<form  class="form-inline" action="modifUser.php" method="POST">
<label>Id</label>

<input name="id" type="text" value="<?php echo $_GET['id_user'];?>" readonly>
<br>
<label>Nom</label>

<input name="nom" type="text" value="<?php echo $_GET['nom_user'];?>">

<br>

<label>Prenom</label>

<input name="prenom" type="text" value="<?php echo $_GET['prenom_user'];?>">

<br>

<label>Adresse</label>

<input name="adresse" type="text" value="<?php echo $_GET['adresse_user'];?>">

<br>

<label>Login</label>

<input name="login" type="text" value="<?php echo $_GET['login_user'];?>">

<br>

<label>Password</label>

<input name="pwd" type="password" value="<?php echo $_GET['pwd_user'];?>">

<br><br><br><br>

<input type="submit" value="Modifier User">

</form>
  

<h1>Gestion Users</h1>




<body>

<table id="table-admin">


  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Login</th>
    <th>Password</th>
    <th>Action</th>
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