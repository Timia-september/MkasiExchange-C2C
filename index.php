<?php
session_start();
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKasiExchange | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">MKasiExchange</a>
            <div class="navbar-nav ms-auto">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a class="nav-link btn btn-outline-light px-3" href="logout.php">Logout</a>
                <?php else: ?>
                    <a class="nav-link" href="login.php">Login</a>
                    <a class="nav-link btn btn-light text-primary ms-2 px-3" href="register.php">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container mt-5 text-center">
        <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
            <h1 class="display-5 fw-bold text-primary">Welcome to the Township Economy</h1>
            <p class="col-md-8 fs-4 mx-auto">The safest place to buy and sell within your community.</p>
            <hr class="my-4">
            <p>Ready to start trading?</p>
            <a href="register.php" class="btn btn-primary btn-lg px-5">Join the Marketplace</a>
        </div>
    </div>
</body>
</html>