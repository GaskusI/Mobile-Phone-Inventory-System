<?php

require_once 'database.php';
function log_action(PDO $pdo, $event)
{
    
    $stmt = $pdo->prepare('INSERT INTO logs (user_id, event) VALUES (:user_id, :event)');
    $stmt->execute([
        'user_id' => $_SESSION['user_id'],
        'event' => $event,
    ]);
}

function log_session(PDO $pdo, $user_id, $event) 
{
    
    $stmt = $pdo->prepare('INSERT INTO logs (user_id, event) VALUES (:user_id, :event)');
    $stmt->execute([
        'user_id' => $user_id,
        'event' => $event,
    ]);
}