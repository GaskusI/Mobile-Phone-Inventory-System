<?php
require_once 'vendor/autoload.php';
require_once 'mobilePhone.php';
require_once 'database.php';

if (isset($_POST['phone_id'])) {
    $phone_id = $_POST['phone_id'];
    $phone = new MobilePhone(['id' => $phone_id]);
    $phone->delete($pdo);

    echo "Phone deleted successfully.";
    header('Location: index.php');
} else {
    echo "Error: Phone not set.";
}