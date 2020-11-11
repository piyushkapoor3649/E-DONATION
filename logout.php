<?php
session_start();
session_destroy();
header('location:login.php');
exit();
//echo "<script>window.location='login.php'</script>";
?>