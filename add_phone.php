<?php
require_once 'vendor/autoload.php';
require_once 'mobile_phone.php';
require_once 'database.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];

$phone = new MobilePhone([
    'brand' => $brand,
    'model' => $model,
    'price' => $price,
    'availability' => $availability
]);

$phone->add($pdo);

header('Location: index.php');

exit;
}
echo $twig->render('add_phone.twig');
exit;
