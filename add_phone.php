<?php
require_once 'vendor/autoload.php';
require_once 'mobile_phone.php';
require_once 'session_check.php';

session_check();

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

    if (empty($_POST['brand']) || empty($_POST['model']) || empty($_POST['price']) || empty($_POST['availability']))
    {
        $error = 'Please fill in all required fields.';
    } else {
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
        header('Location: dashboard.php');
        exit;
    }

echo $twig->render('add_phone.twig', ['error' => $error ?? null]);
