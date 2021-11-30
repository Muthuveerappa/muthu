<?php 
 include 'header2.php'; 
 include 'config.php';
 session_start();
 $c_email = $_SESSION["c_email"];
 $travelcode = $_SESSION["travelcode"];
 $numticket = $_SESSION["numticket"];
 $c_card_number = $_SESSION["card_number"];
 $c_card_holder = $_POST['card_holder'];
 $c_password = $_POST['password'];
 $sql = "SELECT * FROM bank WHERE card_number='$c_card_number';";
$result = mysqli_query($conn, $sql) or die("1 Query Unsuccessful add account");
if($result->num_rows==1)  
{
    while($row = mysqli_fetch_assoc($result))
    {
        if($row['password']==$c_password && $row['card_holder']==$c_card_holder) 
        {
            $balance=$row['balance'];
        }
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
$totalprice=$price*$numticket;
if($balance>$totalprice)
{
    $balance=$balance-($price*$numticket);
$sql = "UPDATE bank SET balance='{$balance}' WHERE card_number='$c_card_number';";
$result = mysqli_query($conn, $sql) or die("3 Query Unsuccessful.");
$ticket_book_bank=array();

 $ticket1 = $_SESSION["ticket1"];
 if($numticket>=1)
 {
    $ticket_book_bank=array_merge($ticket_book_bank,array($ticket1));
    $sql = "INSERT INTO ticket (cemail,travelcode,ticket) VALUES ('$c_email','$travelcode','$ticket1')";
    $result = mysqli_query($conn, $sql) or die("4 Query Unsuccessful add account");
    if($numticket>=2)
    {
        $ticket2 = $_SESSION["ticket2"];
        $ticket_book_bank=array_merge($ticket_book_bank,array($ticket2));
        $sql = "INSERT INTO ticket (cemail,travelcode,ticket) VALUES ('$c_email','$travelcode','$ticket2')";
        $result = mysqli_query($conn, $sql) or die("5 Query Unsuccessful add account");
        if($numticket>=3)
        {
            $ticket3 = $_SESSION["ticket3"];
            $ticket_book_bank=array_merge($ticket_book_bank,array($ticket3));
            $sql = "INSERT INTO ticket (cemail,travelcode,ticket) VALUES ('$c_email','$travelcode','$ticket3')";
            $result = mysqli_query($conn, $sql) or die("6 Query Unsuccessful add account");
            if($numticket>=4)
            {
                $ticket4 = $_SESSION["ticket4"];
                $ticket_book_bank=array_merge($ticket_book_bank,array($ticket4));
                $sql = "INSERT INTO ticket (cemail,travelcode,ticket) VALUES ('$c_email','$travelcode','$ticket4')";
                $result = mysqli_query($conn, $sql) or die("7 Query Unsuccessful add account");
                if($numticket>=5)
                {
                    $ticket5 = $_SESSION["ticket5"];
                    $ticket_book_bank=array_merge($ticket_book_bank,array($ticket5));
                    $sql = "INSERT INTO ticket (cemail,travelcode,ticket) VALUES ('$c_email','$travelcode','$ticket5')";
                    $result = mysqli_query($conn, $sql) or die("8 Query Unsuccessful add account");
                    if($numticket>=6)
                    {
                        $ticket6 = $_SESSION["ticket6"];
                        $ticket_book_bank=array_merge($ticket_book_bank,array($ticket6));
                        $sql = "INSERT INTO ticket (cemail,travelcode,ticket) VALUES ('$c_email','$travelcode','$ticket6')";
                        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful add account");
                    }
                }
            }
        }
    }
 }

 ?>
<div id="main-content">
    <h2>Ticket Details</h2>
    <form class="post-form" action="add_flight_choose.php" method="post">
        <div class="form-group">
            <label>Transaction is successful</label>
            <img src="resources/tick.png" height= "30" width= "30"/>
        </div>
        <div class="form-group">
            <label>Ticket:</label>
            <?php
            for($i=0;$i<$numticket;$i++)
            {
                echo '<i style="color:black;font-size:20px;font-family:arial ;">'.$ticket_book_bank[$i].'&nbsp; </i> ';
            }
            ?>
        </div>
        <input class="submit" type="submit" value="Book another flight"  />
    </form>
</div>
<?php
}
?>