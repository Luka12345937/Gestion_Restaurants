<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);

    // Exemple de vérification (à remplacer par une vérification en base de données)
    $validEmail = 'user@example.com';

    if ($email === $validEmail) {
        // En production, générez un token unique et envoyez un email avec un lien de réinitialisation
        // Exemple : sendPasswordResetEmail($email, $token);
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
