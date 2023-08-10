<?php
session_start();
require('actions/users/showOneUsersProfileAction.php'); // Inclusion de l'action pour afficher le profil d'un utilisateur
?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/head.php'); ?> <!-- Inclusion du fichier contenant les balises <head> -->

<body>
    <?php include('includes/navbar.php'); ?> <!-- Inclusion du fichier contenant la barre de navigation -->
    <br><br>

    <div class="containers profile">
        <?php
        if (isset($errorMsg)) {
            echo $errorMsg; // Affichage du message d'erreur s'il existe
        }

        if (isset($userInfos)) {
            ?>
            <div class="card">
                <div class="card-body">
                    <?php if (!empty($userInfos['profile_photo'])) : ?>
                        <img src="<?= $userInfos['profile_photo']; ?>" alt="Avatar" class="profile-image">
                    <?php endif; ?>
                   
                    <h1>Hello,  <?= $userInfos['pseudo']; ?></h1>
                    <br>
                    <h4>Nom : <?= $userInfos['last_name']; ?></h4>
                    <p>Prénom : <?= $userInfos['first_name'] . '<br> Email : '  . $userInfos['email_address']; ?></p>
                    <h5>Numéro de téléphone  : <?= $userInfos['phone_number']; ?></h5>
                    <h5>Adresse : <?= $userInfos['shipping_address']; ?></h5>
                   
                    <hr>
                    
                    
                    <?php if (isset($_SESSION['iduser']) && $_SESSION['iduser'] == $userInfos['user_id']) : ?>
                        <a href="editProfile.php?user_id=<?= $_SESSION['iduser']; ?>" class="btn btn-secondary">Modifier</a>
                        <!-- Lien pour accéder à la modification du profil de l'utilisateur en passant son ID dans l'URL -->
                    <?php endif; ?>
                    
                </div>
            </div>
         <hr>
         

        <?php
        }
        
          // Récupérer les produits partagés par l'utilisateur avec les commentaires et les likes
        $getSharedProducts = $bdd->prepare('SELECT products.product_id, products.product_name, products.description, products.price, products.product_image, users.first_name AS users_pseudo, 
            COUNT(DISTINCT comments.comment_id) AS comment_count, COUNT(DISTINCT likes.like_id) AS like_count
            FROM products
            LEFT JOIN comments ON comments.product_id = products.product_id
            LEFT JOIN likes ON likes.product_id = products.product_id
            LEFT JOIN share_product ON share_product.products_product_id = products.product_id
            LEFT JOIN users ON users.user_id = share_product.users_share_user_id
            WHERE users.user_id = ?
            GROUP BY products.product_id
            ORDER BY products.product_id DESC');
        $getSharedProducts->execute([$idOfUser]);
        

        if (isset($getSharedProducts)) {
            while ($product = $getSharedProducts->fetch()) {
                // Boucle pour afficher tous les produits partagés par l'utilisateur
        
        ?>
        
                <div class="card card-product">
                    <div class="card-header">
                        <?= $product['product_name']; ?>
                    </div>
                    <br>
                    <div class="card-body">
                        <?php if (!empty($product['product_image'])) : ?>
                            <img src="<?= $product['product_image']; ?>" alt="" class="product-image">
                        <?php endif; ?>
                    </div>
                    
                    <div class="card-footer">
                        Déscription : <?= $product['description']; ?>
                        <br>
                         Prix : <?= number_format($product['price'], 2, ',', ' '); ?> €
                        <br>
                        Partagé par <?= $product['users_pseudo']; ?> le <?= isset($product['created_at']) ? $product['created_at'] : 'Date non disponible'; ?>
                        <br>
                        Commentaires: <?= isset($product['comment_count']) ? $product['comment_count'] : 0; ?> | Likes: <?= isset($product['like_count']) ? $product['like_count'] : 0; ?>
                    </div>
                </div>
                <hr>
                <br>
                
        <?php
            }
        }
        
        ?>

    </div>
    <?php include "includes/footer.php" ?>
</body>

</html>
