<?php
require("common.php");
if (!isset($_SESSION['email_id'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Settings</title>
       <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        <style>
            body{
                background: url(img/settings.jpg);
                height: 100%;
                width: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover; 
            }
            h4{
                color: yellowgreen;
            }
            
            
        </style>
    </head>
    <body>
        <br><br><br><br>
        <?php include 'header.php'; ?>
        <br><br>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4> change name</h4>
                    <form action="settings_script.php" method="POST">
                    <div class="form-group">
                                <input type="text" class="form-control"  placeholder="enter first name"   name="first_name" required = "true">
                            </div>
                        <div class="form-group">
                                <input type="text" class="form-control"  placeholder="enter last name"   name="last_name" required = "true">
                            </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <p style="color: red"><?php echo $_GET['error1']??''; ?></p>
                    </form>
                    <br><br><br>
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password2" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password3"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <p style="color: red"><?php echo $_GET['error3']??''; ?></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="navbar-fixed-bottom">
        <?php include("footer.php"); ?>
        </div>
    </body>
</html>