<?php
$con=mysqli_connect("localhost","root","","final") or die("Database not connected");
if(isset($_POST['submit']))
{
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $price = mysqli_real_escape_string($con, $_POST['price']);
  $file=addslashes($_FILES['file']['tmp_name']);
  $image=addslashes($_FILES['file']['name']);
  $file=file_get_contents($file);
  $file=base64_encode($file);    
  $query=mysqli_query($con,"insert into tbl_product (name,file,image,price) values('$name','$file','$image','$price')") or die("Query Error");
  ?>
  <script type="text/javascript"> 
  window.alert("Result Saved");
  </script>
  <div style="text-align: center;">
  <a href="data.php"><button>BACK TO HOMEPAGE</button></a>
  </div>
  <?php
}
?>
