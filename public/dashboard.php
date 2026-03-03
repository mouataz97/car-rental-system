<?php
require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../includes/header.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}   else {
    echo "Welcome to dashboard!";
}

require_once __DIR__ . '/../includes/footer.php';
