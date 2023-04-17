<?php
require_once 'database.php';
function session_check() 
{
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit();
    }
}