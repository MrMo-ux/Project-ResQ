<<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="SAV_login.css">
    </head>
    <body>
    <div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-form">
        <h2>Volunteer Login</h2>
        <form action="validate_volunteer.php" method="post">
          <p>
            <input type="text" placeholder="Username" name="username" value="" required>
          </p>
          <p>
            <input type="password" placeholder="Password" name="password" value="" required>
          </p>
          <p>
            <input class="btn" type="submit" value="Sign In" />
          </p>
          <p>
            <a href="">Forgot Password?</a>
          </p>
        </form>
      </div>
    </div>
    <div class="col-right">
      <div class="login-social">
        <h2>Login with</h2>
        <a class="btn btn-go" href="admin_login.php">Admin login</a>
        <a class="btn btn-fb" href="registration_volunteer.php">Volunteer register</a>
        <a class="btn btn-tw" href="staff_login.php">Staff login</a>
      </div>
    </div>
  </div>
  <div class="credit">
    Designed by Kenji & Muhammad</a>
  </div>
</div>     
    </body>
</html>