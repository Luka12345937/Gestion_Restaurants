<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $guests = intval($_POST['guests']);

    // Ici, vous pouvez enregistrer les données dans une base de données ou envoyer un email
    // Exemple d'enregistrement dans une base de données :
    // $sql = "INSERT INTO reservations (name, email, phone, date, time, guests) VALUES (?, ?, ?, ?, ?, ?)";
    // Exécutez la requête SQL...

    // Pour cet exemple, on simule une réussite
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
