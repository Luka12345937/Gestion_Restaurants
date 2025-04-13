<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Hashage du mot de passe en production
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Exemple de vérification (à remplacer par une insertion en base de données)
    // $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    // Exécutez la requête SQL...

    // Pour cet exemple, on simule une réussite
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
