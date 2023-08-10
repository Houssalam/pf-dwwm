<?php
session_start();
require('../database.php');

if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Récupérer les commentaires et avis pour ce produit depuis la base de données
    $query = "SELECT c.*, u.pseudo 
              FROM comments c
              INNER JOIN users u ON c.user_id = u.user_id
              WHERE c.product_id = :product_id";

    $getComments = $bdd->prepare($query);
    $getComments->bindParam(':product_id', $product_id);
    $getComments->execute();

    // Afficher les commentaires et avis
    while($comment = $getComments->fetch()) {
        echo "Pseudo : " . $comment['pseudo'] . "<br>";
        echo "Review Title : " . $comment['review_title'] . "<br>";
        echo "Review Text : " . $comment['review_text'] . "<br>";

        // Afficher les étoiles en fonction du rating (exemple visuel)
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $comment['rating']) {
                echo "★"; // Étoile remplie
            } else {
                echo "☆"; // Étoile vide
            }
        }

        echo "<hr>";
    }
} else {
    echo "Product ID not provided.";
}
?>
