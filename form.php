<?php include 'koneksi.php'; ?>

<link rel="stylesheet" href="css/style.css">

<div class="form-center">

<form action="tambah.php" method="POST">

    <h2>🎬 Tambah Review</h2>

    <label>Film:</label>
    <select name="id_film" required>
        <?php
        $film = mysqli_query($conn, "SELECT * FROM film");
        while($f = mysqli_fetch_array($film)){
        ?>
            <option value="<?= $f['id_film']; ?>">
                <?= $f['judul']; ?>
            </option>
        <?php } ?>
    </select>

    <br><br>

    <label>Rating (1-10):</label>
    <input type="number" name="rating" min="1" max="10" required>

    <br><br>

    <label>Komentar:</label><br>
    <textarea name="komentar" required></textarea>

    <br><br>

    <button type="submit">Submit</button>

</form>

</div>