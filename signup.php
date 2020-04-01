<?php
require("common.php");
if (isset($_SESSION['email_id'])) {
    header('location: index.php');
}
?>
<!DOCTYPE HTML>  
<html>
<head>
  <link href="signup.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css"> 
<style>
.error {color: #FF0000;}
body{
    background: url("img/signup2.jpg");
    background-size: cover;
     
  }   
  label{
    color: black;
    font-family: cursive;
  }
  .signup-form{
    float: right;
    margin-right: 100px; 
  }
  .text-center{    
    color:  black;
  }    
  .a8{
    color: red;
  }

</style>
</head>
<body>  

<?php
$fnerr = $lnerr = $emerr = $p1err = $p2err = $pherr = $error = $error2 = "";
$first_name = $last_name = $email_id = $password1 = $password2 = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $fnerr = "Enter first name";
  } else {
    $first_name = test_input($_POST["first_name"]);
    if(!preg_match("/^[a-zA-Z\s]*$/",$first_name)){$fnerr = "only letters and spaces are allowed" ;}
  }
  
  if (empty($_POST["last_name"])) {
    $lnerr = "Enter last name";
  } else {
    $last_name = test_input($_POST["last_name"]);
    if(!preg_match("/^[a-zA-Z\s]*$/",$last_name)){$lnerr = "only letters and spaces are allowed" ;}
  }
    
  if (empty($_POST["email_id"])) {
    $emerr = "Enter email id";
  } else {
    $email_id = test_input($_POST["email_id"]);
    if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$email_id)){$emerr = "enter correct email format" ;}
  }   

  if (empty($_POST["pass1"])) {
    $p1err = "Enter password";
  } else {
    $password1 = test_input($_POST["pass1"]);
  }

  if (empty($_POST["pass2"])) {
    $p2err = "Enter confirm password";
  } else {
    $password2 = test_input($_POST["pass2"]);
  }

  if (empty($_POST["phone"])) {
    $pherr = "Enter phone number";
  } else {
    $phone = test_input($_POST["phone"]);
    if($phone <6000000000 || $phone > 9999999999){$pherr = "enter 10 digit correct phone number" ;}
  }
 
  if($password1 != $password2)
  {
    $error2 = "passwords do not match";
  }


 if(!empty($first_name) && !empty($last_name) && !empty($email_id) && !empty($password1) && !empty($password2) && !empty($phone) && empty($fnerr) && empty($lnerr) && empty($emerr) && empty($p1err) && empty($p2err) && empty($pherr) && empty($error) && empty($error2)){

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
      $error = "Email already exists";
  
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div><?php include 'header.php'; ?></div>
  <br>

<div class="signup-form">
    <form action="signup.php" method="POST">
    <div class="form-header">
      <h2>Sign Up</h2>
    </div>
 <div class="form-group">
     <label>First Name :</label>
     <input class="form-control"  name="first_name" placeholder="first Name" value="<?php 
     if (isset($_POST['signup'])){echo $_POST['first_name'];}
   ?>">
     <span class="error"> <?php echo $fnerr;?></span>
 </div>
 <div class="form-group">   
     <label>Last Name :</label>
     <input class="form-control" placeholder="last name" name="last_name" value="<?php 
     if (isset($_POST['signup'])){echo $_POST['last_name'];}
   ?>">
     <span class="error"> <?php echo $lnerr;?></span>
 </div>
 <div class="form-group">
     <label>Email Id :</label>
     <input  class="form-control"  placeholder="email id"   name="email_id"  value="<?php 
     if (isset($_POST['signup'])){echo $_POST['email_id'];}
   ?>">
     <span class="error"> <?php echo $emerr;?></span>
 </div>
 <div class="form-group">
     <label>Password :</label>
     <input type="password" class="form-control" placeholder="Password" name="pass1"  value="<?php 
     if (isset($_POST['signup'])){echo $_POST['pass1'];}
   ?>">
     <span class="error"> <?php echo $p1err;?></span>
 </div>
 <div class="form-group">
     <label>Confirm Password :</label>
     <input type="password" class="form-control" placeholder="Confirm Password" name="pass2"  value="<?php 
     if (isset($_POST['signup'])){echo $_POST['pass2'];}
   ?>">
     <span class="error"> <?php echo $p2err;?></span>
     <span class="error"> <?php echo $error2;?></span>
 </div>
 <div class="form-group">
     <label>Phone :</label>
     <input type="number" class="form-control"  placeholder="phone" name="phone"  value="<?php 
     if (isset($_POST['signup'])){echo $_POST['phone'];}
   ?>">
     <span class="error"> <?php echo $pherr;?></span>
 </div>      
        
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block btn-lg" name="signup">Sign Up</button>
      <span class="error"> <?php echo $error;?></span>
    </div>  
    <div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
    </form>
</div>

</body>
</html>