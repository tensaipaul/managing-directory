<?php 
include('server.php');
include('../config/db.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">

  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
      
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="first_name" name="first_name" value="<?php echo $first_name; ?>">
    </div>

    <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="last_name" name="last_name" value="<?php echo $last_name; ?>">
    </div>
      
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
    </div>
      
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
    </div>
      
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
      </p>
      
  </form>

</body>
</html>