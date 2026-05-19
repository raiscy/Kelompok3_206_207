<?php
$conn = mysqli_connect("localhost", "root", "", "movie");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>