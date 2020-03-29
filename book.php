<?php
require("common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $con = mysqli_connect("localhost","root", "", "movies") or die(mysqli_error($con));
    $img = $_GET['id'];
    $_SESSION['pid'] = $img;
    $query1 = "select name from `products` where `id` = '$img'"; 
    $result = mysqli_query($con, $query1) or die(mysqli_error($con));
    $row4 = mysqli_fetch_array($result);
    $pname = $row4['name'];
    $_SESSION['pname'] = $pname;
}

?>
<html>
    <head>
        <title>Booking tickets</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/angular.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <style>
            img{
                height: 600px;
                width: auto;
                margin-left: 40px;
                margin-top: 30px;
            }
            body{
             background: url("img/book2.jpg");
             background-size: cover;
                }
                h1{
                    font-family: fantasy;
                    color: red;
                    font-size: 50px;
                }
                form{
                    font-family: normal;
                    margin-left: 30px;
                    color: yellow;
                    font-size: 30px;
                    
                }
                #p3{
                    font-size: 25px;
                }
                input{
                    font-family: cursive;
                    font-size: 50px;
                    background-color: rgba(0,0,0,0.4)
                }
                #p4{
                    font-size: 20px;
                }
                button{
                    padding-left: 25px!important;
                    padding-right: 25px!important;
                    padding-top: 10px!important;
                    padding-bottom: 10px!important;
                    border-radius: 30px!important;
                    margin-left: 100px;
                    font-size: 20px!important;
                }
                button:hover{
                    background-color: green!important;
                }   
                
                
        </style>
    </head>
    <body>
         <?php
         include 'header.php';
         ?>
    <br><br><br>
    <div id="container">
        <div class="row">
        <div id="p1" class="col-sm-6">
            <img src="img/<?php echo $img; ?>.jpg">
        </div>
        <div id="p2" col-sm-6 >
            <form action="pay3.php" method="POST">
                <br><br>
                <h1>Booking Details:</h1>
                <div class="form-group">
                   <label>Movie Name :</label>
                   <?php echo $pname; ?>
                </div>
                <div class="form-group">
                    <label>Ticket Fare&nbsp&nbsp&nbsp;:&nbsp</label>Rs. 250/-
                    
                </div>
                <div class="form-group" ng-app="" ng-init="n1='1'">
                    <label>No' of Tickets&nbsp:</label>
                    <input type="number" ng-model="n1" id='p4' value="1" name="price">
                    <br><label id="p3">Internet Charges:&nbsp</label>Rs.&nbsp{{10*n1}}
                    <br><label>Total Charges:&nbsp</label>Rs.&nbsp{{(250*n1)+(10*n1)}}
                </div>
                
                <div class="form-group">
                    <label>Select date & time</label>
                    <input type="date" name="date1" id="p4">
                     <div class="a8"><?php echo $_GET['error']??''; ?></div>
                </div>

                <button  class="btn btn-primary" name="pay">Proceed to pay</button>
            </form>
            
        </div>
        </div>
    </div>
    </body>
</html>

