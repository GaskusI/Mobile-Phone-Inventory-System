<?php

require_once 'database.php';
function log_action(PDO $pdo, $event)
{
    $stmt = prepareStatement($pdo, "INSERT INTO logs (user_id, event) VALUES (:user_id, :event)", [
        'user_id' => $_SESSION['user_id'],
        'event' => $event,
        ]);
}