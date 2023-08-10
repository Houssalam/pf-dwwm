<?php
session_start();
require('../database.php');

// Vérifier si l'utilisateur est connecté en tant qu'administrateur
if (!isset($_SESSION['auth']) || $_SESSION['role'] != 2) {
    header("Location: ../../page-signin.php");
    exit;
}

if (isset($_GET['user_id']) && !empty($_GET['user_id'])) {
    $userId = $_GET['user_id'];

    // Vérifier si l'utilisateur existe dans la base de données
    $checkUser = $bdd->prepare('SELECT user_id FROM users WHERE user_id = ?');
    $checkUser->execute([$userId]);
    $userExists = $checkUser->rowCount() > 0;

    if ($userExists) {
        // Activer l'utilisateur dans la base de données
        $enableUser = $bdd->prepare('UPDATE users SET isActive = 1 WHERE user_id = ?');
        $enableUser->execute([$userId]);

        // Rediriger vers la page des utilisateurs avec un message de confirmation
        header("Location: ../../users.php?success=Utilisateur activé avec succès");
        exit;
    } else {
        // L'utilisateur n'existe pas, rediriger avec un message d'erreur
        header("Location: ../../users.php?error=L'utilisateur n'existe pas");
        exit;
    }
} else {
    // Rediriger vers la page des utilisateurs avec un message d'erreur
    header("Location: ../../users.php?error=ID d'utilisateur manquant");
    exit;
}
?>

