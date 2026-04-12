<?php
session_start();
include 'db_connect.php';
$result = mysqli_query($conn, "SELECT * FROM products ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>MKasiExchange</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="fw-bold mb-4">Marketplace Nearby</h2>
        <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4 mb-4">
                    <div class="card kasi-card h-100 shadow-sm">
                        <img src="<?php echo $row['image_path']; ?>" class="product-img" alt="item">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="price-badge">R<?php echo $row['price']; ?></span>
                                <small class="text-muted"><?php echo $row['location']; ?></small>
                            </div>
                            <h5 class="fw-bold"><?php echo $row['item_name']; ?></h5>
                            <p class="text-muted small"><?php echo $row['description']; ?></p>
                            <a href="#" class="btn btn-kasi w-100">Chat with Seller</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>