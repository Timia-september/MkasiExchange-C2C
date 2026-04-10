<?php
include 'db_connect.php'; // This connects to your database automatically

if (isset($_POST['register_btn'])) {
    $uname = $_POST['username'];
    $pass  = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure encryption!
    $role  = 'Standard'; // Everyone who signs up is a standard user/seller

    $query = "INSERT INTO users (username, password, role) VALUES ('$uname', '$pass', '$role')";
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
</head>
<body class="bg-light">
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
                    <button type="submit" name="register_btn" class="btn btn-primary w-100">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>