<!DOCTYPE html>
<html lang="en">
<head>
  <title>register Form</title>
</head>
<body>
        <center>
    <?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password anda salah</h2>";
        }
    ?>
    </center>
    <center>
      <h1>register </h1>
      <form method="post" action="cek_login.php">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="text" name="Email" value="" placeholder="Email"></p>
        <select name="gender" required>
        <option value="kresek">-</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="kresek">kresek indomaret premium</option>
        </select><br>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p><input type="password" name="passwordrety" value="" placeholder="Retype Pass"></p>
        <p class="submit"><input type="submit" name="commit" value="Register"></p>
        <h4>sudah punya akun? klik login , <a href="form_login.php ">Login!</a> </h4>
        </center>
      </form>
    </div>
  
</body>
</html> 