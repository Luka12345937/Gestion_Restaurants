<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // Exemple de vérification (à remplacer par une mise à jour en base de données)
    // $sql = "UPDATE users SET name = ?, email = ?, phone = ?, address = ? WHERE id = ?";
    // Exécutez la requête SQL...

    // Pour cet exemple, on simule une réussite
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
