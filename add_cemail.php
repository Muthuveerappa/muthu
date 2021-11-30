<?php 
include 'header2.php'; 
include 'config.php';
 session_start();
 $c_email = $_GET['cemail'];
 $_SESSION["c_email"]=$c_email;
 header("location: add_flight_choose.php");
?>