<?php
require("common.php");
if (!(isset($_SESSION['email_id']))) {
    header('location: index.php');
}
$name = $_SESSION['name'];
$pid = $_SESSION['pid'];
$price = $_SESSION['price'];
$mname = $_SESSION['pname'];
$total = $_SESSION['total'];
$date = $_SESSION['date'];
?>
<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="image.js"></script>
        <script type="text/javascript" src="html2canvas.js"></script>
        <style>
            body{
                background: url("img/success1.jpg");
                background-size: cover;
              
            }
            footer{
                padding: 10px 0;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
              }
              .jumbotron{
                  margin-top:  100px;
                 font-family:Book Antiqua;
                  font-size: 100px!important;
                  text-shadow: 2px 2px 8px violet;
                  background: rgba(45,78,58,0.9)
              }
              h1{
                  padding-top: 40px;
                  color: white!important;
              }
              .btn{
                padding: 0 20px 0 20px;
                font-size: 30px;
                background-color: yellow;
                color: black;
                border-radius: 30px;
              }
              .btn:hover{
                background-color: green;
                color: white;
              }
              .but1{
                float: right;
                
              }

              .a1{
            width: 60%;
            height: 420px;
            border: 1px solid black;
            margin: 100px;
            margin-left: 20%;
            background-color: rgba(0,0,0,0.4);
            display: none;
        }
        .a1 img{
            float: left;
            width: auto;
            height: 415px;
            background-size: cover;
        }
        .a1 .a3{
            background-color: yellow ;
            background:url(img/backw.jpg);
            
            width: auto;
            height: 415px;
            color: black;
            font-size: 25px; 
        }
        .a1 .a4{
      margin-left: 10px;
      padding-left: 30px;
            color: red;
            font-size: 25px;
            font-family: Comic Sans;
        }
        
              
              
        </style>
    </head>
    <body>
        <div class="container">
        <div id="b1"><?php include 'header.php'; ?></div>
        <br><br><br>
        <div class="jumbotron">
            <h1 align="center">Booking completed Successfully</h1>
            <a href="#"><input type="submit" class="btn" name="download" id="btnSave" value="Download ticket"></a>
            <a href="mail.php"><input type="submit" class="btn but1" name="sendmail" value="send confirm message to the mail"></a>
            <center><img class="img-responsive" src="img/success3.png" height="40px;" width="auto"></center>
        </div>
        </div>


        <div class="a1" id="a1">
    <div class="a2">
    <img src="img/<?php echo $pid; ?>.jpg">
    </div>
    <div class="a3">
        ------------MovieTicks.com------------<br>
        <span class="a4">Name of The person</span> : <?php echo  $name   ?><br><br>
        <span class="a4">Name of the Movie</span>  : <?php echo  $mname  ?> <br><br>                                
        <span class="a4">No. of tickets</span>     : <?php echo  $price     ?> <br><br>                                        
        <span class="a4">Total price </span>       : <?php echo  $total  ?> <br> <br>                                   
        <span class="a4">Date of show</span>       : <?php echo  $date   ?>        
    </div>
   </div>
       <div class="navbar-fixed-bottom">
            <?php include "footer.php"; ?>
        
        </div> 
        <?php
        if($_GET['vari']??'' === "success"){  
          echo '<script type="text/javascript">';
          echo ' alert("mail sent successfully")';
          echo '</script>';}
          else{alert("mail not sent");}

         ?>
    </body>

</html>


