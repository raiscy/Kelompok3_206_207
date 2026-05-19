<?php

include 'koneksi.php';

$id = $_GET['id_review'] ?? null;

if (!$id) {
    die("ID tidak ditemukan di URL");
}

$data = mysqli_query($conn, "SELECT * FROM review WHERE id_review='$id'");
$d = mysqli_fetch_array($data);

if (!$d) {
    die("Data tidak ditemukan");
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="form-center">

<form action="update.php" method="POST">
    <h2>🎬 Edit Review</h2>

    <input type="hidden" name="id_review" value="<?= $d['id_review']; ?>">

    Rating:
    <input type="number" name="rating" value="<?= $d['rating']; ?>"><br><br>

    Komentar:
    <textarea name="komentar"><?= $d['komentar']; ?></textarea><br><br>

    <button type="submit">Update</button>
</form>
</div>