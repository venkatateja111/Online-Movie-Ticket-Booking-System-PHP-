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
                <h1 style="color: white;">Category:  Telugu  </h1>
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 ">
                    
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>That is MahaLaxmi </h3>
                            <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=2" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                                
                        </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Majili </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=3" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 ">
                    
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Suryakantham </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=4" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>
            </div>
            
            
            <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Geetha govindham </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=5" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/6.jpg" alt="">
                        <div class="caption">
                            <h3>Tholiprema </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=6" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/7.jpg" alt="">
                        <div class="caption">
                            <h3> GangLeader </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=7" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>
            </div>
            
            
             <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/8.jpg" alt="">
                        <div class="caption">
                            <h3>Syeraa </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=8" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/9.jpg" alt="">
                        <div class="caption">
                            <h3>Chanakya </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=9" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/10.jpg" alt="">
                        <div class="caption">
                            <h3>Saaho </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=10" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
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
