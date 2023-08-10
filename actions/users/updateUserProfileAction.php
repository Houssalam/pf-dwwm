<?php
session_start();
require('../database.php');


// Check if the form is submitted and $_SESSION['iduser'] is defined and not empty
if (isset($_POST['updateProfile']) && isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])) {
    // ...
    $avatar_link = $_POST['avatar_link'];
    $pseudo = $_POST['pseudo'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $shipaddress = $_POST['shipaddress'];
    $phonenumb = $_POST['phonenumb'];
    $iduser = $_SESSION['iduser']; 

    // Mettre à jour les informations dans la base de données
    $sql = "UPDATE users SET pseudo = :pseudo, first_name = :firstname, last_name = :lastname, email_address = :email, shipping_address = :shipaddress, phone_number = :phonenumb, profile_photo = :avatar_link WHERE user_id = :iduser";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([
        'pseudo' => $pseudo,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'shipaddress' => $shipaddress, // Corrected here : 'shipping_address' => $shipaddress,
        'phonenumb' => $phonenumb,
        'avatar_link' => $avatar_link,
        'iduser' => $iduser,
    ]);

    $_SESSION['success'] = "Vos informations ont été mises à jour avec succès.";
    header("Location: ../../profile.php?user_id=".$_SESSION['iduser']);
    exit();
} else {
    header("Location: ../profile.php");
    exit();
}

