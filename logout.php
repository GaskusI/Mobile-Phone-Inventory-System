<?php

require_once 'logging.php';
require_once 'database.php';

session_start();

if (isset($_SESSION['user_id'])) 
{
    $user_id = $_SESSION['user_id'];
    //log_session($pdo, $user_id, "Logged out.");
    log_action($pdo, "Logged out.");
    session_destroy();
    header('Location: index.php');
    exit;
}

