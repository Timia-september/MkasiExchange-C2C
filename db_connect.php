<?php
$host = "localhost:3307";
$user = "root";
$pass = "";
$db   = "mkasiexchange_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>