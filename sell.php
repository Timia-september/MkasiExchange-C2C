<?php
session_start();
include 'db_connect.php';

// Security: If not logged in, kick them to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['post_item_btn'])) {
    $uid = $_SESSION['user_id'];
    $name = mysqli_real_escape_string($conn, $_POST['item_name']);
    $price = $_POST['price'];
    $loc = mysqli_real_escape_string($conn, $_POST['location']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "INSERT INTO products (user_id, item_name, price, location, description) 
              VALUES ('$uid', '$name', '$price', '$loc', '$desc')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Item posted successfully!'); window.location='index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sell an Item | MKasiExchange</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Post an Item for Sale</h2>
        <form method="POST" class="card p-4 shadow-sm">
            <div class="mb-3">
                <label>What are you selling?</label>
                <input type="text" name="item_name" class="form-control" placeholder="e.g. Sneakers, Fruit, Service" required>
            </div>
            <div class="mb-3">
                <label>Price (R)</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Township/Location</label>
                <input type="text" name="location" class="form-control" placeholder="e.g. Khayelitsha, Soweto" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" name="post_item_btn" class="btn btn-success">Post Item</button>
        </form>
    </div>
</body>
</html>