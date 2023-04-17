<?php
$dsn = "mysql:host=localhost;dbname=inventory_system";
$username = "root";
$password = "";

$pdo = new PDO('mysql:host=localhost;dbname=inventory_system', 'root', '');

function prepareStatement($pdo, $sql, array $params = [])
{
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt;
}