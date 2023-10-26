<?php include 'header.php';?>
<link rel="stylesheet" href="CSS/design-contact.css">
<link rel="stylesheet" href="CSS/design-form.css">
        <div class="form">

            <form action="ajoutContact.php" method="POST">


                <div class="prenom">
                    <label>Prénom</label>
                    <br>
                    <input class="area1" type="text" name="prenom"/>
                </div>
                <div>
                    <label>Nom</label>
                    <br>
                    <input class="area1" type="text" name="nom"/>
                </div>
                <div class="info">
                    <label>Email</label>
                    <br>
                    <input class="area2" type="text" name="email"/>
                </div>
                <div class="info">
                    <label>N° de téléphone</label>
                    <br>
                    <input class="area2" type="text" name="telephone"/>
                </div>
                <div class="info">
                    <label>Message</label>
                    <br>
                    <textarea class="msg" name="message"></textarea>
                </div>
             
                <div>
                    <input class="send" type="submit" value="Envoi"/>
                </div>
            </form>
        </div>
        <div class="sig">
            <h2>JD Fermetures</h2>
            <h2>68850 Staffelfelden</h2>
        </div>
        <div class="txt2" >
            <h4>JD Fermetures</h4>
            <h4>4A rue de l'Eau qui Court</h4>
            <h4>68850 Staffelfelden</h4>
            <br>
            <p>Service technique : 06 08 18 55 86</p>
            <p>Service commercial : 06 82 07 58 12</p>
            <p>E-mail : Merci d'utiliser le formulaire ci-contre.</p>
        </div>



        <?php include 'footer.php';?>