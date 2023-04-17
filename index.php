<?php

require_once 'vendor/autoload.php';
require_once 'mobile_phone.php';
require_once 'database.php';

session_start();

//$password = 'admin';
//$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
//echo $hashedPassword;

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = prepareStatement($pdo, "SELECT * FROM users WHERE username = :username", ['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        log_action($pdo, "Logged in.");
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid username or password'; //twig padaryt kad errora ismestu, nes dabar sita eilute is dalies nieko nepadaro
    }
}

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
echo $twig->render('index.twig', ['error' => $error ?? null]);
