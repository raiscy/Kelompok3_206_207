<?php

include 'koneksi.php';
$id = $_GET['id_review'];

mysqli_query($conn, "DELETE FROM review WHERE id_review='$id'");

header("Location: index.php");
?>