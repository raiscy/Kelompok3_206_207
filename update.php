<?php
include 'koneksi.php';

$id = $_POST['id_review'];
$rating = $_POST['rating'];
$komentar = $_POST['komentar'];

mysqli_query($conn, "UPDATE review 
SET rating='$rating', komentar='$komentar'
WHERE id_review='$id'");

header("Location: index.php");
?>