<?php
session_start();
require_once "../config/database.php";

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if($users && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header("Location: index.php");
    exit;
} else {
    echo "Invalid email or password.";
}