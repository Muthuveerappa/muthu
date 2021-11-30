<?php
 include 'header2.php';
 include 'config.php';
 session_start();
 $travelcode = $_GET['travelcode'];
 $ticket = $_GET['ticket'];
 $c_email = $_SESSION["c_email"];
$sql = "DELETE FROM ticket WHERE cemail = '{$c_email}' AND travelcode = '{$travelcode}' AND ticket = '{$ticket}'";
$result = mysqli_query($conn, $sql) or die("4 Query Unsuccessful add account");
header("location: your_ticket.php");
 ?>