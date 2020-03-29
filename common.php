<?php
$conn = mysqli_connect("localhost","root","");
$sql = 'CREATE DATABASE IF NOT EXISTS movies';
mysqli_query($conn,$sql);
$conn2 = mysqli_connect("localhost","root","","movies");
$sql2 = "create table users (id bigint(100) AUTO_INCREMENT,first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, email_id VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, phone bigint(20) NOT NULL,primary key(id))";
mysqli_query($conn2,$sql2);
$sql3 = "create table products (id bigint(100) AUTO_INCREMENT, name VARCHAR(200) NOT NULL,primary key(id))";
 mysqli_query($conn2,$sql3);
$sql4 =  "insert into products values(2,'That is MahaLakshmi');";
$sql4 .= "insert into products values(3,'Majili');";
$sql4 .= "insert into products values(4,'Suryakantham');";
$sql4 .= "insert into products values(5,'Geetha Govindam');";
$sql4 .= "insert into products values(6,'Tholiprema');";
$sql4 .= "insert into products values(7,'GangLeader');";
$sql4 .= "insert into products values(8,'Syeraa');";
$sql4 .= "insert into products values(9,'Chanakya');";
$sql4 .= "insert into products values(10,'Saaho');";
$sql4 .= "insert into products values(11,'Simbaa');";
$sql4 .= "insert into products values(12,'URI');";
$sql4 .= "insert into products values(13,'Super 30');";
$sql4 .= "insert into products values(14,'Bharat');";
$sql4 .= "insert into products values(15,'Kalank');";
$sql4 .= "insert into products values(16,'Gully Boy');";
$sql4 .= "insert into products values(17,'Badla');";
$sql4 .= "insert into products values(18,'Luka Chuppi');";
$sql4 .= "insert into products values(19,'Total Dhamaal');";
$sql4 .= "insert into products values(20,'Spider man far from home');";
$sql4 .= "insert into products values(21,'Hobbs and shaw');";
$sql4 .= "insert into products values(22,'Joker');";
$sql4 .= "insert into products values(23,'Gemini Man');";
$sql4 .= "insert into products values(24,'John wick 3');";
$sql4 .= "insert into products values(25,'Shazam');";   
$sql4 .= "insert into products values(26,'Maleficient 2');";
$sql4 .= "insert into products values(27,'Aladdin');";
$sql4 .= "insert into products values(28,'IT');";
mysqli_multi_query($conn2,$sql4);

$sql5 = "create table user_products (id bigint(100) AUTO_INCREMENT, uid bigint(100), pid bigint(100) , no_of_tickets bigint(100), total bigint(100),date date, status ENUM('pending','confirmed') NOT NULL,primary key(id))";
 mysqli_query($conn2,$sql5);
 $sql6 = "alter table user_products ADD INDEX(uid,pid)";
 mysqli_query($conn2,$sql6);

$sql8 = "select * from users";
mysqli_query($conn2,$sql8);

 $con = mysqli_connect("localhost","root", "", "movies") or die(mysqli_error($con));
 session_start();
 ?>