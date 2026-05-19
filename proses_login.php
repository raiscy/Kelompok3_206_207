<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
$user  = mysqli_fetch_array($query);

if ($user && $password === $user['password']) {
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['username'] = $user['username'];
    header("Location: index.php");
} else {
    header("Location: login.php?error=1");
}
exit;
?>
