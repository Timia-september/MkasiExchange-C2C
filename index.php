<?php
session_start();
include 'db_connect.php';


$query = "SELECT * FROM products ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>MKasiExchange | Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">MKasiExchange</a>
            <div class="navbar-nav ms-auto">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a class="nav-link" href="sell.php">Sell Item</a>
                    <a class="nav-link btn btn-outline-light ms-2" href="logout.php">Logout</a>
                <?php else: ?>
                    <a class="nav-link" href="login.php">Login</a>
                    <a class="nav-link btn btn-light text-primary ms-2" href="register.php">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4">Local Marketplace</h2>
        <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo $row['item_name']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">R<?php echo $row['price']; ?> - <?php echo $row['location']; ?></h6>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                            <button class="btn btn-sm btn-outline-success w-100">Contact Seller</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>