<?php
session_start();

// Cek apakah sesi sudah dimulai
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang , <?php echo $username; ?></h1>
    <a href="log_out.php">Logout</a>
</body>
</html>