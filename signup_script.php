<?php
  require("common.php");
  $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
  $email_id = mysqli_real_escape_string($con, $_POST['email_id']);
  $password1 = mysqli_real_escape_string($con, $_POST['pass1']);
  $password2 = mysqli_real_escape_string($con, $_POST['pass2']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $password = MD5($password1);
  
  $query1 = "select email_id from `users` where `email_id` = '$email_id'";
  $result = mysqli_query($con, $query1) or die(mysqli_error($con));
  $num = mysqli_num_rows($result);
  if($num==0)
  {
    $query = "INSERT INTO `users`(`first_name`, `last_name`,`email_id`, `password`, `phone`) VALUES('$first_name', '$last_name', '$email_id','$password','$phone')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email_id'] = $email_id;
    $_SESSION['user_id'] = $user_id;
    header('location: index.php');
  }
  else
      header('location: signup2.php?error=E-mail already exists');

?>