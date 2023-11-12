<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
</head>
<body>
  
        <center>
    <?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:blue';>pret salah :v</h2>";
        }
    ?>
    </center>
    <center>
      <h1>Login </h1>
      <form method="post" action="cek_login.php">
        <p><input type="text" name="username" value="" placeholder="email ato usernem"></p>
        <p><input type="password" name="password" value="" placeholder="pasword"></p>
        <p class="submit"><input type="submit" name="commit" value="Masuk!"></p>
        <h4>ga punya akun? regis lah , <a href="register.php ">register disni</a> </h4>
        </center>
      </form>
    </div>
  
</body>
</html> 