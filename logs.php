<?php
require_once 'vendor/autoload.php';
require_once 'database.php';
require_once 'session_check.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

session_check();

$stmt = $pdo->query('SELECT * FROM logs');
if (!$stmt) 
{
    die('Error: ' . $pdo->errorInfo()[2]);
}

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render('logs.twig', ['logs' => $rows]);