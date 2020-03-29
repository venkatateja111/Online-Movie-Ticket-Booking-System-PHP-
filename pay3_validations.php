<?php
 require("common.php");
 $number = preg_replace('/\s+/', '', $_POST['cardNumber']);

 if(!(preg_match("/^(?:4[0-9]{12}(?:[0-9]{3})?)$/",$number)) &&  !(preg_match("/^(?:5[1-5][0-9]{14})$/",$number)) && !(preg_match("/^(?:3[47][0-9]{13})$/",$number))  )
  {
     
     $error = "Please enter valid card number";
     header("location: pay3.php? error= $error");
  }



  else
  {
  
  $pid = $_SESSION['pid'];
  $price =   $_SESSION['price'] ;
  $total = $_SESSION['total']  ;
  $uid = $_SESSION['user_id'];
  $date = $_SESSION['date'];
  	$query = "UPDATE `user_products` SET `status` = 'confirmed' WHERE  `uid` = '$uid' AND `pid` = '$pid' AND `no_of_tickets` = '$price' AND `total` = '$total' AND `date` = '$date' AND `status` = 'pending' ";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header("location: success.php");
  }

    


?>   