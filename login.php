<?php
require("common.php");
if (isset($_SESSION['email_id'])) {
    header('location: index.php');
}


?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap2.min.css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="login.js"></script>
        <link rel="stylesheet" type="text/css" href="login.css">
        
<title>login page </title>
<style>
    .alert {
   width:50%;  
   margin-left: 260px;
}
.alert button:hover
{
background-color:  white;
}
label, .a8{
    padding-left: 15px;
}

</style>

</head>
        
<body>
    <br><br>
    <div class="container">
     <div class="row">
    <div class="container" style="display:none;" id="myAlert">
        
        <div class="alert alert-warning alert-dismissable " id="myAlert2">
            <button type='button' class='close' data-dismiss='alert'   aria-hidden='true'>&times;</button>
            please enter correct email id 
        </div>

    </div>
         <div class="container" style="display:none;" id="myAlert3">
        
        <div class="alert alert-warning alert-dismissable " id="myAlert4">
            <button type='button' class='close' data-dismiss='alert'   aria-hidden='true'>&times;</button>
            please enter correct password
        </div>

    </div>
         <div class="container" style="display:none;" id="myAlert5">
        
        <div class="alert alert-warning alert-dismissable " id="myAlert6">
            <button type='button' class='close' data-dismiss='alert'   aria-hidden='true'>&times;</button>
            please enter correct email id and password password
        </div>

    </div>
    </div>
</div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
    <div class="col-sm-12 col-lg-12">   
<div class="loginbox">
<br/>
<br/>
<img src="img/log.png" class="log">
<h1>LOGIN here</h1>
<form action="login_submit.php" method="POST">
<label>E-mail :</label>
<input type="text" name="email_id" id="email_id"/>
<label>Password :</label>
<input type="password" name="pass" id="password"/>
<button onclick="abc();return false;">LOGIN</button><br><br>
<div class="a8"><?php echo $_GET['error']??''; ?></div>
</form>
<a class="a8" href="signup.php">create a new account</a><br>
<a class="a8" href="index.php">Home page</a>
</div>
</div>
</div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <div class="col-sm-12 navbar-fixed-bottom">
         <?php
         include 'footer.php';
         ?>
    </div>
</body>
</html>
