<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlickPick</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    
    <a class="navbar-brand fw-bold" href="dashboard.php">🎬 FlickPick</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">Home</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrasi.php">Create Account</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">

<div class="hero-overlay text-center">
    <h1>Welcome to FlickPick 🎬</h1>
    <p>Discover, review, and share your favorite films.</p>
    <a href="registrasi.php" class="btn btn-primary mt-3">Get Started</a>
</div>

<div class="carousel-inner">

    <div class="carousel-item active">
        <img src="assets/joker.jpg" class="d-block w-100 hero-img">
    </div>

    <div class="carousel-item">
        <img src="assets/shrek.jpg" class="d-block w-100 hero-img">
    </div>

    <div class="carousel-item">
        <img src="assets/parasite.jpg" class="d-block w-100 hero-img">
    </div>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>