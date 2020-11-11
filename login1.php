<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
  <form method="post" action="server.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <div style="text-align: center;">
   <a href="navbar.html"><button>BACK TO HOMEPAGE</button></a>
  </div>
  <script>
    history.pushState(null,null,null);
    window.addEventListner('popstate',function(){history.pushState(null,null,null);})
  </script>
</body>
</html>