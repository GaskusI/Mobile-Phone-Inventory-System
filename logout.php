<?php

require_once 'database.php';

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Add logging for logout event
    $stmt = $pdo->prepare('INSERT INTO logs (user_id, event) VALUES (:user_id, :event)');
    $stmt->execute([
        'user_id' => $user_id,
        'event' => "Logged out."
    ]);
    session_destroy();
    header('Location: index.php');
    exit;
}

