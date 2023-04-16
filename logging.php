<?php

function logged_add($pdo, $event)
{
    $stmt = $pdo->prepare('INSERT INTO logs (user_id, event) VALUES (:user_id, :event)');
    $stmt->execute([
        'user_id' => $_SESSION['user_id'],
        'event' => $event,
    ]);
}

function logged_edit($pdo, $event)
{
    $stmt = $pdo->prepare('INSERT INTO logs (user_id, event) VALUES (:user_id, :event)');
    $stmt->execute([
        'user_id' => $_SESSION['user_id'],
        'event' => $event,
    ]);
}

function logged_delete($pdo, $event)
{
    $stmt = $pdo->prepare('INSERT INTO logs (user_id, event) VALUES (:user_id, :event)');
    $stmt->execute([
        'user_id' => $_SESSION['user_id'],
        'event' => $event,
    ]);
}