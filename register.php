<?php
include 'db_connect.php'; 

if (isset($_POST['register_btn'])) {
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pass  = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    
    $key = isset($_POST['admin_key']) ? $_POST['admin_key'] : '';

    
    $role = ($key === 'MKasi_Secret_777') ? 'Admin' : 'Standard';

    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    
    $query = "INSERT INTO users (username, password, role, phone) VALUES ('$uname', '$pass', '$role', '$phone')";
    $run   = mysqli_query($conn, $query);
    
    if ($run) {
        echo "<script>alert('Registration Successful! Welcome to the Kasi Economy.'); window.location='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Join MKasiExchange</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 card p-4 shadow-sm">
                <h3 class="text-center">Create Account</h3>
                <hr>
                <form method="POST">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Phone Number (for WhatsApp)</label>
                        <input type="text" name="phone" class="form-control" placeholder="e.g. 27712345678" required>
                    </div>

                    <div class="mb-3">
                        <label>Admin Secret Key (Optional)</label>
                        <input type="text" name="admin_key" class="form-control" placeholder="Leave blank for standard">
                        <small class="text-muted">Only for authorized staff.</small>
                    </div>

                    <button type="submit" name="register_btn" class="btn btn-primary w-100">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</body>