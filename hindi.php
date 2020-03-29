<?php
require("common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index2.css">
        <style>
            body{
                 background: url("img/webpic4.jpg");
                 background-size: cover;
                 }
            img{
                width: auto;
                height: 400px;
            }
            h3{
                color: yellow;
            }
            .bt1{
                margin-left: -3px;
            }
           
        </style>
    </head>

    <body>
        <?php
        include 'header.php'; 
        ?>
        <br><br><br>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div>
                <h1 style="color: white;">Category:  Hindi  </h1>
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/11.jpg" alt="">
                        <div class="caption">
                            <h3>Simmba </h3>
                            <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=11" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                               
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/12.jpg" alt="">
                        <div class="caption">
                            <h3>Uri </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=12" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/13.jpg" alt="">
                        <div class="caption">
                            <h3>Super30 </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=13" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>
            </div>
            
            
            <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/14.jpg" alt="">
                        <div class="caption">
                            <h3>Bharat </h3>
                               <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=14" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/15.jpg" alt="">
                        <div class="caption">
                            <h3>Kalank </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=15" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/16.jpg" alt="">
                        <div class="caption">
                            <h3> Gully Boy </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=16" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>
            </div>
            
            
             <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/17.jpg" alt="">
                        <div class="caption">
                            <h3>Badla </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=17" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Luka Chuppi </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=18" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Total Dhamaaka </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=19" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>
            </div>
            
            
            
              
    </div>
            

       <br><br>
        <?php include("footer.php");
        ?>
    
    </body>

</html>
