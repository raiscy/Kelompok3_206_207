<!DOCTYPE html>
<html>
<head>
    <title>Registrasi - FlickPick</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="center">

<div class="auth-box">
    <h2>🎬 FlickPick</h2>
    <p class="auth-sub">Buat akun baru</p>

    <?php if(isset($_GET['error'])): ?>
        <div class="alert">❌ Email sudah terdaftar. Coba email lain.</div>
    <?php endif; ?>

    <form action="proses_registrasi.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>

        <label>Email</label>
        <input type="email" name="email" placeholder="email@gmail.com" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Min. 6 karakter" minlength="6" required>

        <button type="submit" class="btn-full">Daftar Sekarang</button>
    </form>

    <p class="auth-link">Sudah punya akun? <a href="login.php">Login</a></p>
</div>

</body>
</html>
