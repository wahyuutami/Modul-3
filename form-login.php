<!DOCTYPE html>
<html>
<style media="screen">
</style>
<head>
<title> Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <img src="user.png"/>
      <h1>Login</h1>
      <form action="login.php" method="post">
        <br> <br>
          <div class="form-input">
            <input type="text" name="nama" placeholder="Enter Username">
          </div>
          <div class="form-input">
            <input type="password" name="pass" placeholder="Enter Password">
          </div>
          <input type="submit" name="submit" value="Login" onclick="return validasiLogin()" class="btn-login">
      </form>
    </div>
    </form>
  </body>
</html>

