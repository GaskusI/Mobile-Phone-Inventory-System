<?php
require_once 'vendor/autoload.php';
require_once 'mobilePhone.php';
require_once 'database.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$stmt = $pdo->prepare("SELECT * FROM phones");
$stmt->execute();

$phones = [];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $phone = new MobilePhone($row);
    $phones[] = $phone;
}
echo $twig->render('index.twig', ['phones' => $phones]);

?>