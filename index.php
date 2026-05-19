<?php
session_start();
include 'koneksi.php';
?>

<link rel="stylesheet" href="css/style.css">

<header>
    <h1>🎬 FlickPick</h1>

    <div style="display: flex; align-items: center; gap: 12px;">
        <?php if(isset($_SESSION['username'])): ?>
            <span style="font-size: 13px; color: #8899a6;">Halo, <strong style="color: #00e054;"><?= htmlspecialchars($_SESSION['username']); ?></strong> 👋</span>
        <?php endif; ?>

        <a href="form.php" class="btn" style="margin-bottom: 0;">+ Add Review</a>

        <?php if(isset($_SESSION['username'])): ?>
            <a href="logout.php" class="btn-logout">Logout</a>
        <?php endif; ?>
    </div>
</header>

<div class="container" style="margin-top: 30px;">

<div class="grid">

<?php
$data = mysqli_query($conn, "
    SELECT review.*, film.judul, film.genre, film.durasi, film.tahun
    FROM review
    JOIN film ON review.id_film = film.id_film
    ORDER BY review.id_film DESC
");

while($d = mysqli_fetch_array($data)){ 
?>

    <div class="card">
        <div class="poster">
            <img src="assets/<?= strtolower(str_replace(' ', '_', $d['judul'])); ?>.jpg" class="d-block w-100">
        </div>

        <div class="card-content">
            <div class="title"><?= $d['judul']; ?></div>

            <div class="meta">
                <?= $d['genre']; ?> • <?= $d['durasi']; ?> min • <?= $d['tahun']; ?>
            </div>

            <div class="rating">★ <?= $d['rating']; ?>/10</div>

            <p><?= $d['komentar']; ?></p>

            <div class="actions">
                <a href="edit.php?id_review=<?= $d['id_review']; ?>">✏️ Edit</a>
                <a href="delete.php?id_review=<?= $d['id_review']; ?>" 
                onclick="return confirm('Yakin ingin menghapus review ini? 🗑️')">🗑️ Delete </a> 
            </div>
        </div>
    </div>

<?php } ?>

</div>
</div>
