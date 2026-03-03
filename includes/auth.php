<?php
session_start();
// Placeholder auth: redirect to login if not authenticated
if (!isset($_SESSION['user']) && basename($_SERVER['PHP_SELF']) !== 'login.php') {
    header('Location: /public/login.php');
    exit;
}
