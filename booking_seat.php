<?php 
 include 'header2.php'; 
 include 'config.php';
 session_start();
 $c_email = $_SESSION["c_email"];
 $travelcode = $_SESSION["travelcode"];
 $numticket = $_SESSION["numticket"];
 $ticket1 = filter_input(INPUT_POST, 'ticket1', FILTER_SANITIZE_STRING);
 if($numticket==1)
 {
    $_SESSION["ticket1"] = $ticket1;
    header("location: payment.php");
 }
else if($numticket==2)
{
    $ticket2 = filter_input(INPUT_POST, 'ticket2', FILTER_SANITIZE_STRING);
    if($ticket1==$ticket2)
    {
        ?>
        <div id="main-content">
    <form class="post-form" action="booking_seatchoose.php" method="post">   
    <?php
    echo "<BR>Error:Same seat is entered";
    ?>
    <input class="submit" type="submit" value="Choose seat"  />
    </form>
 </div>
 <?php
    }
    $_SESSION["ticket1"] = $ticket1;
    $_SESSION["ticket2"] = $ticket2;
    header("location: payment.php");
}
else if($numticket==3)
{
    $ticket2 = filter_input(INPUT_POST, 'ticket2', FILTER_SANITIZE_STRING);
    $ticket3 = filter_input(INPUT_POST, 'ticket3', FILTER_SANITIZE_STRING);
    if($ticket1==$ticket2 || $ticket1==$ticket3 || $ticket3==$ticket2)
    {
        ?>
        <div id="main-content">
    <form class="post-form" action="booking_seatchoose.php" method="post">   
    <?php
    echo "<BR>Error:Same seat is entered";
    ?>
    <input class="submit" type="submit" value="Choose seat"  />
    </form>
 </div>
 <?php
    }
    $_SESSION["ticket1"] = $ticket1;
    $_SESSION["ticket2"] = $ticket2;
    $_SESSION["ticket3"] = $ticket3;
    header("location: payment.php");
}
else if($numticket==4)
{
    $ticket2 = filter_input(INPUT_POST, 'ticket2', FILTER_SANITIZE_STRING);
    $ticket3 = filter_input(INPUT_POST, 'ticket3', FILTER_SANITIZE_STRING);
    $ticket4 = filter_input(INPUT_POST, 'ticket4', FILTER_SANITIZE_STRING);
    if($ticket1==$ticket2 || $ticket1==$ticket3 || $ticket1==$ticket4 || $ticket2==$ticket3 || $ticket2==$ticket4 || $ticket3==$ticket4)
    {
        ?>
        <div id="main-content">
    <form class="post-form" action="booking_seatchoose.php" method="post">   
    <?php
    echo "<BR>Error:Same seat is entered";
    ?>
    <input class="submit" type="submit" value="Choose seat"  />
    </form>
 </div>
 <?php
    }
    $_SESSION["ticket1"] = $ticket1;
    $_SESSION["ticket2"] = $ticket2;
    $_SESSION["ticket3"] = $ticket3;
    $_SESSION["ticket4"] = $ticket4;
    header("location: payment.php");
}
else if($numticket==5)
{
    $ticket2 = filter_input(INPUT_POST, 'ticket2', FILTER_SANITIZE_STRING);
    $ticket3 = filter_input(INPUT_POST, 'ticket3', FILTER_SANITIZE_STRING);
    $ticket4 = filter_input(INPUT_POST, 'ticket4', FILTER_SANITIZE_STRING);
    $ticket5 = filter_input(INPUT_POST, 'ticket5', FILTER_SANITIZE_STRING);
    if($ticket1==$ticket2 || $ticket1==$ticket3 || $ticket1==$ticket4 || $ticket1==$ticket5  || $ticket2==$ticket3 || $ticket2==$ticket4 || $ticket2==$ticket5 || $ticket3==$ticket4 || $ticket3==$ticket5 || $ticket4==$ticket5)
    {
        ?>
        <div id="main-content">
    <form class="post-form" action="booking_seatchoose.php" method="post">   
    <?php
    echo "<BR>Error:Same seat is entered";
    ?>
    <input class="submit" type="submit" value="Choose seat"  />
    </form>
 </div>
 <?php
    }
    $_SESSION["ticket1"] = $ticket1;
    $_SESSION["ticket2"] = $ticket2;
    $_SESSION["ticket3"] = $ticket3;
    $_SESSION["ticket4"] = $ticket4;
    $_SESSION["ticket5"] = $ticket5;
    header("location: payment.php");
}
else if($numticket==6)
{
    $ticket2 = filter_input(INPUT_POST, 'ticket2', FILTER_SANITIZE_STRING);
    $ticket3 = filter_input(INPUT_POST, 'ticket3', FILTER_SANITIZE_STRING);
    $ticket4 = filter_input(INPUT_POST, 'ticket4', FILTER_SANITIZE_STRING);
    $ticket5 = filter_input(INPUT_POST, 'ticket5', FILTER_SANITIZE_STRING);
    $ticket6 = filter_input(INPUT_POST, 'ticket6', FILTER_SANITIZE_STRING);
    if($ticket1==$ticket2 || $ticket1==$ticket3 || $ticket1==$ticket4 || $ticket1==$ticket5  || $ticket1==$ticket6 || $ticket2==$ticket3 || $ticket2==$ticket4 || $ticket2==$ticket5 || $ticket2==$ticket6 || $ticket3==$ticket4 || $ticket3==$ticket5 || $ticket3==$ticket6 || $ticket4==$ticket5 || $ticket4==$ticket6 || $ticket5==$ticket6)
    {
        ?>
        <div id="main-content">
    <form class="post-form" action="booking_seatchoose.php" method="post">   
    <?php
    echo "<BR>Error:Same seat is entered";
    ?>
    <input class="submit" type="submit" value="Choose seat"  />
    </form>
 </div>
 <?php
    }
    $_SESSION["ticket1"] = $ticket1;
    $_SESSION["ticket2"] = $ticket2;
    $_SESSION["ticket3"] = $ticket3;
    $_SESSION["ticket4"] = $ticket4;
    $_SESSION["ticket5"] = $ticket5;
    $_SESSION["ticket6"] = $ticket6;
    header("location: payment.php");
}
?>