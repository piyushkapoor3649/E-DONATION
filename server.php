<?php

$db = mysqli_connect('localhost', 'root', '', 'final');
if (isset($_POST['reg_user'])) 
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  if ($password_1 != $password_2)
  {
	echo '<script>alert("The Two password doesnot match")</script>';
  }
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) 
  {
    if ($user['username'] === $username) 
    {
      echo  "Username already exists";
    }

    if ($user['email'] === $email) 
    {
    echo  "email already exists";
    }
  }
  $query = "INSERT INTO users (username, email, password_1) VALUES ('$username', '$email', '$password_1')";
  mysqli_query($db, $query);
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $query = "SELECT * FROM users WHERE username='$username'";
  $results = mysqli_query($db, $query);
  $user1 = mysqli_fetch_assoc($results);
  
  if(!$user1){
    echo "User Does Not Exists";
  }else{
    if($password != $user1['password_1']){
      echo "Enter correct password";
    }
    else{
      session_start();
      $_SESSION['is_logged_in']=true;
      echo "<script>window.location='data.php'</script>";
    }
  }
}
if (isset($_POST['details_user'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $contact_no = mysqli_real_escape_string($db, $_POST['c_no']);
  $college = mysqli_real_escape_string($db, $_POST['college']);
  $room = mysqli_real_escape_string($db, $_POST['room']);
  $details_check_query = "SELECT * FROM details WHERE name='$name'";
  $result1 = mysqli_query($db, $details_check_query);
  $user2 = mysqli_fetch_assoc($result1);
  if ($user2) {
    if ($user2['name'] === $name) {
      echo  " This name already exists";
    }
  }
  $query1 = "INSERT INTO details (name,contactno,college,room) VALUES ('$name', '$contact_no', '$college','$room')";
  mysqli_query($db, $query1);
  echo '<script>alert("Thank you!!! for supporting our Move We Will send Further notifications shortly.")</script>';

}
?>