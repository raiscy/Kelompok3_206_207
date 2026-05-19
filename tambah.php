<?php
include 'koneksi.php';

$id_film = $_POST['id_film'];
$rating = $_POST['rating'];
$komentar = $_POST['komentar'];

mysqli_query($conn, "INSERT INTO review (id_film, rating, komentar)
VALUES ('$id_film', '$rating', '$komentar')");

header("Location: index.php");
?>