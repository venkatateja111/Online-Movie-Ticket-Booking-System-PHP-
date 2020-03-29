<?php
session_start();
if (!isset($_SESSION['email_id'])) {
    header('location: login.php');
}
session_destroy();
header('location: index.php');
?>