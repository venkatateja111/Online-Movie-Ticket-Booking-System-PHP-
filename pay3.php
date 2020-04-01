<?php   
require('common.php');

   
$name = $_SESSION['name'];
$pid = $_SESSION['pid'];
$price = $_SESSION['price'];
$date = $_SESSION['date'];
$total = $price *250 + $price *10;
$_SESSION['total'] = $total;
$uid = $_SESSION['user_id'];
if($total != 0){
   
$query1 = "SELECT * FROM `user_products` WHERE `uid` = '$uid' AND `pid` = '$pid' AND `no_of_tickets` = '$price' AND `total` = '$total' AND `date` = '$date' AND `status` = 'pending'";
$result = mysqli_query($con, $query1) or die(mysqli_error($con));
$num = mysqli_num_rows($result);
if(($num == 0) && ($price > 0)){
$query = "INSERT INTO `user_products`(`uid`, `pid`,`no_of_tickets`, `total`,`date`, `status`) VALUES('$uid', '$pid', '$price','$total','$date','pending')";
    mysqli_query($con, $query) or die(mysqli_error($con));}}

    
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>payment page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="demo.css">
    <script type="text/javascript">
        $(document).ready(
        function(){
        $('#cardNumber').on('keypress change', function () {
        $(this).val(function (index, value) {
        return value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
    });
    });
    });
    </script>
    <style type="text/css">
        footer{
    
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
}
.a8{
    color: red;
}
    </style>

</head>

<body>
    <?php
         include 'header.php';
        
         ?>
    <div class="container-fluid">
        <div class="card-form creditCardForm">
            <div class="heading">
                
                <h1 style="color: black;">Confirm Tickets for Rs.<?php  echo $total  ?></h1>

            </div>
            <div class="payment">
                <form action="pay3_validations.php" method="POST">
                    <div class="form-group owner">
                        <label for="owner">Name Of the Card Holder</label>
                        <input type="text" class="form-control" id="owner" value='<?php echo $name  ?>'>
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" maxlength="3" name="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber">
                        <div class="a8"><?php echo $_GET['error']??''; ?></div>
                         <div class="a8"><?php echo $_GET['date1']??''; ?></div>
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="16"> 2020</option>
                            <option value="17"> 2021</option>
                            <option value="18"> 2022</option>
                            <option value="19"> 2023</option>
                            <option value="20"> 2024</option>
                            <option value="21"> 2025</option>
                            <option value="21"> 2026</option>
                            <option value="21"> 2027</option>

                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="img/visa.jpg" id="visa">
                        <img src="img/mastercard.jpg" id="mastercard">
                        <img src="img/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        
                        <button type="submit" class="btn btn-default" id="confirm-purchase" name="confirm">Confirm</button>
                    </div>
                </form>
            </div>
        </div>

        
    </div>
    <div class="navbar navbar-fixed-bottom">
        <?php
         include 'footer.php';
         ?>
    </div>
         
    
</body>

</html>
