<?php
 require("common.php");
$email_id = mysqli_real_escape_string($con, $_POST['email_id']);
$pass1 = mysqli_real_escape_string($con, $_POST['pass']);
$pass2 = MD5($pass1);
$query = "SELECT id, email_id,first_name FROM `users` WHERE `email_id`='$email_id' AND `password`='$pass2'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);


if ($num == 0) {
  $error = "Please enter correct E-mail id and Password";
  header('location: login.php?error=' . $error);
}
else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email_id'] = $row['email_id'];
  $_SESSION['user_id'] = $row['id'];
  $_SESSION['name'] = $row['first_name'];
  $_SESSION['namel'] = $row['last_name'];
  header('location: index.php');
}
?>
