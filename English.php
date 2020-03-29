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
                <h1 style="color: white;">Category:  English </h1>
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>Spider Man(Far From Home) </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=20" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3>Hobbs & Shaw </h3>
                               <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=21" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>Joker </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=22" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>
            </div>
            
            
            <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Gemini man </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=23" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>Johnwick3 </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=24" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3> Shazam </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=25" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>
            </div>
            
            
             <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/26.jpg" alt="">
                        <div class="caption">
                            <h3>Maleficent2 </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=26" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/27.jpg" alt="">
                        <div class="caption">
                            <h3>Alladdin </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=27" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/28.jpg" alt="">
                        <div class="caption">
                            <h3>IT </h3>
                                <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bt1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=28" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
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
