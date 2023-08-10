<?php
session_start();
require('actions/users/showOneUsersProfileAction.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php');?>

<body>
    <?php include('includes/navbar.php');?>
    <br><br>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4>Modifier les informations :</h4>
                <form action="actions/users/updateUserProfileAction.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Pseudo :</label>
                        <input type="text" name="pseudo" class="form-control" value="<?= $user_pseudo; ?>">
                     
                    </div>
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" name="lastname" class="form-control" value="<?= $user_lastname; ?>">
                      
                    </div>
                    <div class="form-group">
                        <label for="name">Prénom :</label>
                        <input type="text" name="firstname" class="form-control" value="<?= $user_firstname; ?>">
                        
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" class="form-control" value="<?= $user_email; ?>">
                        
                    </div>
                    <div class="form-group">
                        <label for="email">Téléphone :</label>
                        <input type="tel" name="phonenumb" class="form-control" value="<?= $user_phoneNumb; ?>">
                       
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse :</label>
                        <input type="address" name="shipaddress" class="form-control" value="<?= $user_shippingAddress; ?>">
                
                    </div>
                    <div class="form-group">
                        <label for="avatar">Photo profile :</label>
                        <input type="text" name="avatar_link" class="form-control">
                    </div>

                    <button type="submit" name="updateProfile" class="btn btn-primary">Enregistrer les modifications</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
