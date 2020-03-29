<?php
require('common.php');
$name = $_SESSION['name'];
$pid = $_SESSION['pid'];
$price = $_SESSION['price'];
$mname = $_SESSION['pname'];
$total = $_SESSION['total'];
if(isset($_REQUEST["file"])){

     $file = urldecode($_REQUEST["file"]);
       $filepath = "tickets/".$file;
     if(file_exists($filepath))
	{
		
        header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachments; filename="'.basename($filepath).'"');
		header('Expires: 0');
		header('Pragma: no-cache');
		echo "--------------------------MovieTicks.com--------------------------\r\n";
		echo "|                                                                 \r\n";
		echo "|                                                                 \r\n";
		echo "|                                                                 \r\n";
		echo "|                                                                 \r\n";
		echo "|                                                                 \r\n";
		echo "|                  Name                    :  ".$name."           \r\n";
		echo "|                  movie name              :  ".$mname."          \r\n";
		echo "|                  no of tickets booked    :  ".$price."          \r\n";
		echo "|                  Total Price             :  ".$total."          \r\n";
		echo "|                                                                 \r\n";
		echo "|                                                                 \r\n";
		echo "|                                                                 \r\n";
		echo "|                                                                 \r\n";
		echo "|                                                                 \r\n";
		echo "------------------------------------------------------------------\r\n";
		
		
		
		readfile($filepath);
		exit;
	}
}

?>