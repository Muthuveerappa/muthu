<?php 
 include 'header2.php'; 
 include 'config.php';
 $travelcode = $_GET['travelcode'];
 $sql = "SELECT * FROM ticket WHERE travelcode='$travelcode';";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");
 $ticketarray=array();
 $ticketavail=array();
 $numticketavail=0;
 session_start();
 $_SESSION["travelcode"] = $travelcode;
 if($result->num_rows>0)  
 {  
    while($row = mysqli_fetch_assoc($result))
    {
        $ticketarray=array_merge($ticketarray,array($row['ticket']));
    }
}

$ticket=array('A1','A2','A3','A4','A5','A6','B1','B2','B3','B4','B5','B6','C1','C2','C3','C4','C5','C6','D1','D2','D3','D4','D5','D6','E1','E2','E3','E4','E5','E6','F1','F2','F3','F4','F5','F6','G1','G2','G3','G4','G5','G6','H1','H2','H3','H4','H5','H6');


?>
<div id="main-content">
    <h2>Seat Availability</h2>
    <div id="ticketbox">
    <?php 
    $space=0;
    for( $i = 0; $i<48; $i++ )
    {
        if($space==6)
        {
            $space=0;
           // echo "<br>";
        }

        $space=$space+1;
        if(in_array($ticket[$i], $ticketarray))
        {
            echo '<i style="color:red;font-size:30px;font-family:calibri ;">
      &nbsp;&nbsp;'.$ticket[$i].'&nbsp;&nbsp; </i> ';
        }
        else
        {
            $ticketavail=array_merge($ticketavail,array($ticket[$i]));
            echo '<i style="color:green;font-size:30px;font-family:calibri ;">
      &nbsp;&nbsp;'.$ticket[$i].'&nbsp;&nbsp; </i> ';
            $numticketavail=$numticketavail+1;
        }  
    }
    ?>
</div>
    <?php
    if($numticketavail>=6)
    {
        $numticket=array(1,2,3,4,5,6);
    }
    else if($numticketavail==0)
    {
            ?>
    <form class="post-form" action="add_flight_choose.php" method="post">   
    <?php
    echo "No seats available";    
    ?>
    <input class="submit" type="submit" value="Choose another flight"  />
    </form>
 <?php
    }
    else    
    {
        $numticket=array();
        for( $i = 1; $i<$numticketavail+1; $i++ )
        {
            $numticket=array_merge($numticket,$i);
        }
    }
    echo "<br>";
    echo "<br>";
    ?>
        <form class="post-form" action="booking_seatchoose.php" method="post">
            <label for="Number of ticket Select" class="title">Select Number of Tickets</label>  
   <select name="numticket"> 
   <?php
   foreach($numticket as $ticket){ ?>
                    <option value="<?php echo $ticket; ?>"><?php echo $ticket; ?></option> 
    <?php } ?>
        </select>
        <input class="submit" type="submit" value="Book"  />
    </form>
</div>