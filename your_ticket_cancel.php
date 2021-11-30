<?php
 include 'header2.php';
 include 'config.php';
 session_start();
 $travelcode = $_GET['travelcode'];
 $ticket = $_GET['ticket'];
 $c_card_number = $_SESSION["card_number"];
 $c_email = $_SESSION["c_email"];
 $sql = "SELECT * FROM bank WHERE card_number='$c_card_number';";
$result = mysqli_query($conn, $sql) or die("1 Query Unsuccessful add account");
if($result->num_rows==1)  
{
    while($row = mysqli_fetch_assoc($result))
    {
        $balance=$row['balance'];
    }
}
$sql = "SELECT * FROM flight WHERE travelcode='$travelcode';";
$result = mysqli_query($conn, $sql) or die("2 Query Unsuccessful add account");
if($result->num_rows>0)  
{
    while($row = mysqli_fetch_assoc($result))
    {
        $price=$row['price'];
    }
}
$balance=$balance+$price;
$sql = "UPDATE bank SET balance='{$balance}' WHERE card_number='$c_card_number';";
$result = mysqli_query($conn, $sql) or die("3 Query Unsuccessful.");
$sql = "DELETE FROM ticket WHERE cemail = '{$c_email}' AND travelcode = '{$travelcode}' AND ticket = '{$ticket}'";
$result = mysqli_query($conn, $sql) or die("4 Query Unsuccessful add account");
header("location: your_ticket.php");
 ?>