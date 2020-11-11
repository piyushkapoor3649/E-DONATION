<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>user details</title>
  <link rel="stylesheet" type="text/css" href="details.css">
</head>
<body>
  <div class="header">
  	<h2>DETAILS</h2>
  </div>
  <form method="post" action="server.php">
  	<div class="input-group">
  		<label>NAME</label>
  		<input type="text" name="name" required>
  	</div>
  	<div class="input-group">
  		<label>CONTACT NO:</label>
  		<input type="text" name="c_no" required>
  	</div>
  	<div class="input-group">
  		<label>COLLEGE NAME:</label>
  		<input type="text" name="college" required>
  	</div>
  	<div class="input-group">
  		<label>ROOM NO:</label>
  		<input type="text" name="room" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="details_user">SEND-MESSAGE</button>
  	</div>
  </form>
	<div style="text-align: center;">

		<a href="login1.php"><button>LOGOUT</button></a>
  </div>
</body>
</html>