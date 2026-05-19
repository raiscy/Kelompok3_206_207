<?php
include 'koneksi.php';

$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];

$cek = mysqli_query($conn, "SELECT id_user FROM user WHERE email='$email'");
if (mysqli_num_rows($cek) > 0) {
    header("Location: registrasi.php?error=1");
    exit;
}

mysqli_query($conn, "INSERT INTO user (username, email, password)
VALUES ('$username', '$email', '$password')");

header("Location: login.php?registered=1");
exit;
?>
