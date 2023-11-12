<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selamat datang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body{   font-family: 'Poppins', sans-serif; text-align: center; }

    </style>
</head>
<body>
    <h1 class="my-5">Hallo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Selamat Datang Di Dashboard Akun.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset (jika pengen diganti )</a>
        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
        <a href="http://localhost/niel/crud/index.php" class="btn btn-danger ml-3">CRUD ACCOUNT! ( WARNING ADMIN ONLY )</a>
        <a href="http://localhost/niel/Library_week2/index.html" class="btn btn-danger ml-3">Kembali Ke Halaman Utama</a>
    </p>
</body>
</html>