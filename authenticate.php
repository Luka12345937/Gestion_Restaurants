<?php
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Exemple de vérification (à remplacer par une vérification en base de données)
    $validEmail = 'user@example.com';
    $validPassword = 'password123'; // En production, utilisez des mots de passe hashés

    if ($email === $validEmail && $password === $validPassword) {
        $_SESSION['user'] = $email;
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
