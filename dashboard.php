<?php
require_once 'vendor/autoload.php';
require_once 'mobile_phone.php';
require_once 'database.php';
require_once 'session_check.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$stmt = $pdo->prepare("SELECT * FROM phones");
$stmt->execute();

$phones = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{
    $phone = new MobilePhone($row);
    $phones[] = $phone;
}
echo $twig->render('dashboard.twig', ['phones' => $phones]);