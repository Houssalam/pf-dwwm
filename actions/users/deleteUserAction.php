<?php
session_start();


// Vérifier si l'utilisateur est connecté en tant qu'administrateur
if (!isset($_SESSION['auth']) || $_SESSION['role'] != 2) {
    header("Location: ../../page-signin.php");
    exit;
}
require('../database.php');

if (isset($_POST['confirm_delete']) && isset($_POST['user_id'])) {
    $userId = $_POST['user_id'];

    // Vérifier si l'utilisateur existe dans la base de données
    $checkUser = $bdd->prepare('SELECT user_id FROM users WHERE user_id = ?');
    $checkUser->execute([$userId]);
    $userExists = $checkUser->rowCount() > 0;

    if ($userExists) {
        try {
            // Désactiver les contraintes de clé étrangère pour permettre la suppression en cascade
            $bdd->exec('SET FOREIGN_KEY_CHECKS = 0');

            // Supprimer les commentaires liés à l'utilisateur
            $deleteComments = $bdd->prepare('DELETE FROM comments WHERE user_id = ?');
            $deleteComments->execute([$userId]);

            // Supprimer l'utilisateur de la base de données
            $deleteUser = $bdd->prepare('DELETE FROM users WHERE user_id = ?');
            $deleteUser->execute([$userId]);

            // Réactiver les contraintes de clé étrangère
            $bdd->exec('SET FOREIGN_KEY_CHECKS = 1');

            // Rediriger vers la page des utilisateurs avec un message de confirmation
            header("Location: ../../users.php?success=Utilisateur supprimé avec succès");
            exit;
        } catch (PDOException $e) {
            // Gérer les erreurs PDO ici
            header("Location: ../../users.php?error=Une erreur s'est produite lors de la suppression de l'utilisateur");
            exit;
        }
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
