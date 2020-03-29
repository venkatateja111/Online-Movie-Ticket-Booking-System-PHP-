<?php
require("common.php");
if (!isset($_SESSION['email_id'])) {
    header('location: index.php');
}
$new_name1 = mysqli_real_escape_string($con, $_POST['first_name']);
$new_name2 = mysqli_real_escape_string($con, $_POST['last_name']);

$old_pass = mysqli_real_escape_string($con, $_POST['password1']);
$new_pass = mysqli_real_escape_string($con, $_POST['password2']);
$new_pass1 = mysqli_real_escape_string($con, $_POST['password3']);
$new_pass1 = MD5($new_pass1);

$query = "SELECT email_id, password FROM users WHERE email_id ='" . $_SESSION['email_id'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];
if(strlen($new_name1)>0 && strlen($new_name2)>0){
    $query5 = "UPDATE `users` SET `first_name` = '$new_name1'  WHERE `email_id`= '".$_SESSION['email_id']."' AND `password`='$orig_pass'";
    $query6 = "UPDATE `users` SET `last_name` = '$new_name2'  WHERE `email_id`= '".$_SESSION['email_id']."' AND `password`='$orig_pass'";
        mysqli_query($con, $query5) or die($mysqli_error($con));
        mysqli_query($con, $query6) or die($mysqli_error($con));
        header('location: settings.php?error1=name Updated successfully');
}

 if(strlen($old_pass) >0 && strlen($new_pass) > 0)        
{
     $old_pass = MD5($old_pass);
     $new_pass = MD5($new_pass);
if ($new_pass != $new_pass1) {
    header('location: settings.php?error3=The two passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email_id = '" . $_SESSION['email_id'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error3=Password Updated successfully');
    } else
        header('location: settings.php?error3=Wrong Old Password');
}
}
?>