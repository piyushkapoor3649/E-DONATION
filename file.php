<!DOCTYPE html>
<html>
<head>
  <title>items details</title>
  <link rel="stylesheet" type="text/css" href="items.css">
</head>
<body> 
  <div class="header">
  	<h2>ITEM DETAILS</h2>
  </div>
<form  action="upload.php" method="post" enctype="multipart/form-data">
<div class="input-group">
  	<label> ITEM NAME</label>
  	<input type="text" name="name"  id="name"required>
</div>
<div class="input-group">
  	<label>QUANTITY:</label>
  	<input type="text" name="price" id="price" required>
</div>
<input type="file" name="file" id="file">
<div class="input-group">
<input type="submit" name="submit" id="submit">
</div>
</form>
</body>
</html>  
