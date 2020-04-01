<?php
require('common.php');
$email = $_SESSION['email_id'];
$to = $email;
$subject = 'confirmation of movie tickets';
$from = 'movieticks@movies.com';

 $name1 = $row['first_name'];
 $subject = "Confirmation of movie tickets";
  $mname = $_SESSION['pname'];
  $price = $_SESSION['price'];
  $total = $_SESSION['total'];
  $name1 = $_SESSION['name'];
  $date  = $_SESSION['date'];
 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 

$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 

$message = "<html><body>";
$message .= "<h1 style='color:red;'>Hello $name1 </h1>";
$message .= "<p style='color:green;font-size:18px;'>You have successfully booked the movie $mname for the date $date </p>";
$message .= "<p style='color:green;font-size:18px;'>Number of tickets booked are  $price</p>";
$message .= "<p style='color:green;font-size:18px;'>Total price is   $total</p>";
$message .= "</body></html>";
 

if(mail($to, $subject, $message, $headers)){
    header('location: success.php?vari=success');
} else{
    header('location: success.php?vari=fail');
}
?>