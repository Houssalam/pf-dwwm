<?php
session_start();
require('actions/database.php');

// Validation du formulaire
if(isset($_POST['validate'])){

    // Vérifier si l'utilisateur a bien complété tous les champs
    if(!empty($_POST['pseudo']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm']) && !empty($_POST['shipaddress']) && !empty($_POST['phonenumb']) && !empty($_POST['avatar_link'])){

        // Données de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_passwordConfirm = password_hash($_POST['password_confirm'], PASSWORD_DEFAULT);
        $user_shippingAddress = htmlspecialchars($_POST['shipaddress']);
        $user_phoneNumb = htmlspecialchars($_POST['phonenumb']);
        $user_avatar = htmlspecialchars($_POST['avatar_link']);

        // Vérifier si l'utilisateur existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT email_address FROM users WHERE email_address = ?');
        $checkIfUserAlreadyExists->execute(array($user_email));

        if($checkIfUserAlreadyExists->rowCount() == 0){

            // Récupérer le rôle de l'utilisateur
            $getRoleOfUser = $bdd->prepare('SELECT role FROM users WHERE email_address = ?');
            $getRoleOfUser->execute(array($user_email));
            $user_role = $getRoleOfUser->fetchColumn();
            
            // Insérer l'utilisateur dans la base de données
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, last_name, first_name, email_address, password, password_confirm, shipping_address, phone_number, isActive, role, profile_photo) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

            $isActive = 1; // Valeur de isActive (1 pour actif, 0 pour inactif)

            // Attribuer la valeur du rôle en fonction des cas
            if ($user_role === "admin") {
                $role = 2; // Rôle d'administrateur
            } elseif ($user_role === "visiteur") {
                $role = 3; // Rôle de visiteur
            } else {
                $role = 1; // Rôle par défaut : utilisateur
            }

            $insertUserOnWebsite->execute(array(
                $user_pseudo,
                $user_lastname,
                $user_firstname,
                $user_email,
                $user_password,
                $user_passwordConfirm,
                $user_shippingAddress,
                $user_phoneNumb,
                $isActive,
                $role,
                $user_avatar
            ));

            // Récupérer les informations de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT pseudo, user_id, first_name, last_name, email_address, shipping_address, phone_number, profile_photo, role FROM users WHERE email_address = ?');
            $getInfosOfThisUserReq->execute(array($user_email));
            $usersInfos = $getInfosOfThisUserReq->fetch();

            // Authentifier l'utilisateur sur le site et récupérer ses données dans des variables de session globales
            $_SESSION['auth'] = true;
            $_SESSION['iduser'] = $usersInfos['user_id'];
            $_SESSION['pseudo'] = $usersInfos['pseudo'];
            $_SESSION['firstname'] = $usersInfos['first_name'];
            $_SESSION['lastname'] = $usersInfos['last_name'];
            $_SESSION['email'] = $usersInfos['email_address'];
            $_SESSION['shipAddress'] = $usersInfos['shipping_address'];
            $_SESSION['phonenumb'] = $usersInfos['phone_number'];
            $_SESSION['avatar_link'] = $usersInfos['profile_photo'];
            $_SESSION['role'] = $usersInfos['role'];

            // Rediriger l'utilisateur vers la page d'accueil
            header('Location: page-signin.php');

        } else {
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }

    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
