<?php
if (isset($_SESSION['email_id'])) {
     $con = mysqli_connect("localhost","root", "", "movies") or die(mysqli_error($con));
    $que = "select `first_name` from `users` where `email_id` = '".$_SESSION['email_id']."'";
    $que1 = mysqli_query($con, $que) or die($mysqli_error($con));
    $row = mysqli_fetch_array($que1);
    $_SESSION['name'] = $row['first_name'];
    $name = $_SESSION['name'];
}
?>
<style>

              .dropdown:hover .dropdown-menu {
  display: block;
}
</style>
<div>
<div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button> 
           <ul class="nav navbar-nav navbar-left">
            <li> <a class="navbar-brand" href="index.php">MovieTicks.com</a> </li>
            <li class="dropdown"> <a href="#" class=" dropdown-toggle" data-toggle="dropdown" >Languages</a> 
                         <ul class="dropdown-menu">
                    <li><a href = "index2.php">All </a></li> 
                    <li><a href = "telugu.php">Telugu </a></li> 
                    <li><a href = "hindi.php"> Hindi</a></li>
                    <li><a href = "English.php">English</a></li>
                         </ul>
                    </li>  
           </ul>
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right"> 
               <?php
                    if (isset($_SESSION['email_id'])) { 
                    ?> 
                
                   
                    
                    <li class="dropdown">
                        <a href="#" class=" dropdown-toggle" data-toggle="dropdown" ><span class = "glyphicon glyphicon-user"> <b><?php echo "hello   ".$name  ?></b></span></a> 
                   
                         <ul class="dropdown-menu">
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                         </ul>
                    </li>
                    
                    </div>
    
                     <?php
                      }
else { 
    ?> 
  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
      <?php } ?>
            </ul> 
        </div> 
    </div> 
</div>