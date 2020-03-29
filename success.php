<?php
require("common.php");
if (!(isset($_SESSION['email_id']))) {
    header('location: index.php');
}
?>
<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
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
              
              
        </style>
    </head>
    <body>
        <div class="container">
        <div id="b1"><?php include 'header.php'; ?></div>
        <br><br><br>
        <div class="jumbotron">
            <h1 align="center">Booking completed Successfully</h1>
            <?php $ticket = "ticket.txt"; echo '<a href="download.php?file='.urlencode($ticket).'" class="btn">Download ticket</a>';  ?>
            <a href="mail.php"><input type="submit" class="btn but1" name="sendmail" value="send ticket to the mail"></a>
            <center><img class="img-responsive" src="img/success3.png" height="40px;" width="auto"></center>
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


