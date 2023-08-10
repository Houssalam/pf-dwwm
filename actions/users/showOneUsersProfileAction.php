<?php

require('actions/database.php');

if(isset($_GET['user_id']) && !empty($_GET['user_id'])) {
    $idOfUser = $_GET['user_id'];

    // Récupérer les informations de l'utilisateur
    $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE user_id = ?');
    $checkIfUserExists->execute([$idOfUser]);

    if($checkIfUserExists->rowCount() > 0){
        // Récupérer toutes les donnees de l'utilisateur
        $userInfos = $checkIfUserExists->fetch();
        
        // Récupérer les informations de l'utilisateur dans des variables distinctes
        $user_pseudo = $userInfos['pseudo'];
        $user_firstname = $userInfos['first_name'];
        $user_lastname = $userInfos['last_name'];
        $user_email = $userInfos['email_address'];
        $user_shippingAddress = $userInfos['shipping_address'];
        $user_phoneNumb = $userInfos['phone_number'];
        $user_avatar = $userInfos['profile_photo'];

        // Récupérer toutes les produits publiés par l'utilisateur
    $getSharedProducts = $bdd->prepare('SELECT products.product_id, products.product_name, products.description, products.price, MAX(users.first_name) AS users_pseudo,
    COUNT(DISTINCT comments.comment_id) AS comment_count, COUNT(DISTINCT likes.like_id) AS like_count
    FROM products
    LEFT JOIN comments ON comments.product_id = products.product_id
    LEFT JOIN likes ON likes.product_id = products.product_id
    LEFT JOIN share_product ON share_product.products_product_id = products.product_id
    LEFT JOIN users ON users.user_id = share_product.users_share_user_id
    WHERE comments.user_id = ?
    GROUP BY products.product_id, products.product_name, products.description, products.price
    ORDER BY products.product_id DESC');
$getSharedProducts->execute([$idOfUser]);



    }else{
        $errorMsg = "Aucun utilisateur trouvé";
    }

}else{
    $errorMsg = "Aucun utilisateur trouvé";
}



