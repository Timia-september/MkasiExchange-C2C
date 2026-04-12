<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
            <img src="img/logo.png" alt="MKasi Logo" class="navbar-logo me-2"> 
            MKasiExchange <span class="text-warning ms-1">C2C</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto align-items-center">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a class="nav-link fw-bold px-3" href="sell.php">+ Sell Something</a>
                    <a class="nav-link fw-bold px-3" href="logout.php">Logout</a>
                <?php else: ?>
                    <a class="nav-link" href="login.php">Login</a>
                    <a class="nav-link btn btn-warning text-dark ms-lg-2 px-3" href="register.php">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>