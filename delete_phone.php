<?php
require_once 'vendor/autoload.php';
require_once 'mobile_phone.php';
require_once 'database.php';
require_once 'session_check.php';

session_check();

if (isset($_POST['phone_id'])) {
    $phone_id = $_POST['phone_id'];
    $phone = new MobilePhone(['id' => $phone_id]);
    $phone->delete($pdo);

    header('Location: dashboard.php');
} else {
    echo "Error: Phone not set.";
}