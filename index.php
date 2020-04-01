<?php
require("common.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Movieticks</title>
    <link rel="icon" href="img/webpic.ico">
    <meta name="viewport" content="width=device-width height=device-height">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">


</head>
<body>
        <?php
         include 'header.php';
         ?>
    <br><br><br>
        <div class="container">
        
            <h1 align="center">Trending Movies</h1>
        
        </div>
        
    <div class="container">

<div id="carousel-demo" class="carousel slide" data-ride="carousel" data-interval="2000">

  <ol class="carousel-indicators">
    <li data-target="#carousel-demo" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-demo" data-slide-to="1"></li>
    <li data-target="#carousel-demo" data-slide-to="2"></li>
    <li data-target="#carousel-demo" data-slide-to="3"></li>
    <li data-target="#carousel-demo" data-slide-to="4"></li>
    <li data-target="#carousel-demo" data-slide-to="5"></li>
  </ol>
 <div class="row">
  <div class="col-sm-6  col-md-3 col-lg-12">

  <div class="carousel-inner" style="width: auto;" class="col-sm-6  col-md-3 col-lg-12">
      
    <div class="item active"> 
        <img src="img/8.jpg" alt="mov1"  style=" height: 500px;" class="img-responsive"> 
      <div class="carousel-caption">
          <h3>Movie        :  SYERAA </h3>
          <h3>Release date : Oct 2 2019</h3>
          <h3>Director     : Surender Reddy</h3>
          <h3>cast         : Chiranjeevi, Nayanathara , Tamanna , Jagapathi babu</h3>
          <h3>IMDB         :  8.8</h3>
          <h3>
               <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bu1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=8" name="add" value="add" class="btn btn-primary bu1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
             
          </h3>
       </div> 
        </div>
      
    
          
    <div class="item"> 
      <img src="img/6.jpg" alt="mov2"  style=" height: 500px;" class="img-responsive" >  
     <div class="carousel-caption">
          <h3>Movie        :  Tholiprema </h3>
          <h3>Release date : April 5 2019</h3>
          <h3>Director     : Venky Atluri</h3>
          <h3>cast         : Varun Tej , Raasi khanna</h3>
          <h3>IMDB         :  8.4</h3>
          <h3>
               <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bu1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=6" name="add" value="add" class="btn btn-primary bu1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
             
          </h3>
       </div>       
   </div> 
    <div class="item"> 
      <img src="img/13.jpg" alt="mov3"  style=" height: 500px;" class="img-responsive" > 
     <div class="carousel-caption">
          <h3>Movie        :  Super 30 </h3>
          <h3>Release date : July 12 2019</h3>
          <h3>Director     : Vikas Bahl</h3>
          <h3>cast         : Hrithik Roshan</h3>
          <h3>IMDB         :  8.5</h3>
          <h3>
               <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bu1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=13" name="add" value="add" class="btn btn-primary bu1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
             
          </h3>
       </div>           
    </div>
    <div class="item"> 
      <img src="img/14.jpg" alt="mov4"  style=" height: 500px;" class="img-responsive" > 
      <div class="carousel-caption">
          <h3>Movie        :  BHARAT </h3>
          <h3>Release date : June 5 2019</h3>
          <h3>Director     : Ali Abbas Zafar</h3>
          <h3>cast         : Salman Khan , Khatrina kaif</h3>
          <h3>IMDB         :  7.8</h3>
          <h3>
               <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bu1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=14" name="add" value="add" class="btn btn-primary bu1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
             
          </h3>
       </div>           
    </div> 
       <div class="item"> 
      <img src="img/26.jpg" alt="mov4"  style=" height: 500px;" class="img-responsive" > 
      <div class="carousel-caption">
          <h3>Movie        :  Maleficent 2 </h3>
          <h3>Release date : Oct 18 2019</h3>
          <h3>Director     : Robert Stromberg</h3>
          <h3>cast         : Angelina Jolie , Joe roth</h3>
          <h3>IMDB         :  8.8</h3>
          <h3>
               <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bu1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=26" name="add" value="add" class="btn btn-primary bu1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
             
          </h3>
       </div>           
    </div> 
       <div class="item"> 
      <img src="img/22.jpg" alt="mov4"  style=" height: 500px;" class="img-responsive" > 
      <div class="carousel-caption">
          <h3>Movie        :  JOKER </h3>
          <h3>Release date : Oct 2 2019</h3>
          <h3>Director     : Todd Philipps</h3>
          <h3>cast         : Joaquin Phoenix, Robert De Niro, Zazie Beetz</h3>
          <h3>IMDB         :  9.0</h3>
          <h3>
               <?php if (!isset($_SESSION['email_id'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary bu1">Book Now</a></p>
                                <?php
                            } else {
                                
                                
                                    ?>
                                    <a href="book.php?id=22" name="add" value="add" class="btn btn-primary bu1">Book Now</a>
                                    <?php
                                
                            }
                            ?>
             
          </h3>
       </div>           
    </div> 
     
  </div> 
</div>
</div>
  
  <!-- Next / Previous controls here -->
  <a class="left carousel-control" href="#carousel-demo" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#carousel-demo" data-slide="next">
    <span class="icon-next"></span>
  </a>
 
  </div>
</div>
    <br><br><br>  
    <div class="col-sm-12">
         <?php
         include 'footer.php';
         ?>
    </div>
</body>
</html>

