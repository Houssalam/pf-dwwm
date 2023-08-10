<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: ../../page-signin.php");
    exit;
}
require('../database.php');

// Vérifier si l'utilisateur est connecté en tant qu'administrateur
if (!isset($_SESSION['auth']) || $_SESSION['role'] != 2) {
    header("Location: ../../login.php");
    exit;
}

if (isset($_GET['user_id']) && !empty($_GET['user_id'])) {
    $userId = $_GET['user_id'];

    // Vérifier si l'utilisateur existe dans la base de données
    $checkUser = $bdd->prepare('SELECT user_id FROM users WHERE user_id = ?');
    $checkUser->execute([$userId]);
    $userExists = $checkUser->rowCount() > 0;

    if ($userExists) {
        // Afficher une boîte de dialogue de confirmation avant de désactiver l'utilisateur
        $confirmationText = "Voulez-vous vraiment désactiver cet utilisateur ?";
        $escapedConfirmationText = json_encode($confirmationText);
        echo '<script>
            if (confirm(' . $escapedConfirmationText . ')) {
                // Désactiver l\'utilisateur dans la base de données
                window.location.href = "desableUserAction.php?user_id=' . $userId . '";
            } else {
                // Annuler l\'action de désactivation
                window.location.href = "../../users.php";
            }
        </script>';
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
