<!DOCTYPE html>
<html>
<head>
    <title>Login - FlickPick</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="center">

<div class="auth-box">
    <h2>🎬 FlickPick</h2>
    <p class="auth-sub">Masuk ke akunmu</p>

    <?php if(isset($_GET['error'])): ?>
        <div class="alert">❌ Email atau password salah.</div>
    <?php endif; ?>

    <?php if(isset($_GET['registered'])): ?>
        <div class="alert success">✅ Registrasi berhasil! Silakan login.</div>
    <?php endif; ?>

    <form action="proses_login.php" method="POST">
        <label>Username</label>
        <input type="username" name="username" placeholder="Username" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" class="btn-full">Login</button>
    </form>

    <p class="auth-link">Belum punya akun? <a href="registrasi.php">Daftar dulu</a></p>
</div>

</body>
</html>
