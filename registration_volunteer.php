<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="registration_volunteer.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="registration_volunteer.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Full name</label>
  	  <input type="text" name="Full_name">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
    <div class="input-group">
  	  <label>Mobile number</label>
  	  <input type="tel" name="HP">
  	</div>
      <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address">
  	</div> 
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="volunteer_login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>