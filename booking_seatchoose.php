<?php 
 include 'header2.php'; 
 include 'config.php';
 $numticket = filter_input(INPUT_POST, 'numticket', FILTER_SANITIZE_STRING);
 session_start();
 $_SESSION["numticket"] = $numticket;
 $travelcode = $_SESSION["travelcode"];
 $sql = "SELECT * FROM ticket WHERE travelcode='$travelcode';";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");
 $ticketarray=array();
 $ticketavail=array();
 $numticketavail=0;
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
            echo "<br>";
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
        <form class="post-form" action="booking_seat.php" method="post">
<?php
if($numticket>=1)
 {
    ?>
    <label for="Ticket Select" class="title">Select Ticket 1</label>  
   <select name="ticket1"> 
   <?php
   foreach($ticketavail as $ticket){ ?>
                    <option value="<?php echo $ticket; ?>"><?php echo $ticket; ?></option> 
    <?php } ?>
        </select>
        <?php
 }
if($numticket>=2)
 {
    ?>
    <label for="Ticket Select" class="title">Select Ticket 2</label>  
   <select name="ticket2"> 
   <?php
   foreach($ticketavail as $ticket){ ?>
                    <option value="<?php echo $ticket; ?>"><?php echo $ticket; ?></option> 
    <?php } ?>
        </select>
        <?php
 }
 if($numticket>=3)
 {
    ?>
    <label for="Ticket Select" class="title">Select Ticket 3</label>  
   <select name="ticket3"> 
   <?php
   foreach($ticketavail as $ticket){ ?>
                    <option value="<?php echo $ticket; ?>"><?php echo $ticket; ?></option> 
    <?php } ?>
        </select>
        <?php
 }
 if($numticket>=4)
 {
    ?>
    <label for="Ticket Select" class="title">Select Ticket 4</label>  
   <select name="ticket4"> 
   <?php
   foreach($ticketavail as $ticket){ ?>
                    <option value="<?php echo $ticket; ?>"><?php echo $ticket; ?></option> 
    <?php } ?>
        </select>
        <?php
 }
 if($numticket>=5)
 {
    ?>
    <label for="Ticket Select" class="title">Select Ticket 5</label>  
   <select name="ticket5"> 
   <?php
   foreach($ticketavail as $ticket){ ?>
                    <option value="<?php echo $ticket; ?>"><?php echo $ticket; ?></option> 
    <?php } ?>
        </select>
        <?php
 }
 if($numticket>=6)
 {
    ?>
    <label for="Ticket Select" class="title">Select Ticket 6</label>  
   <select name="ticket6"> 
   <?php
   foreach($ticketavail as $ticket){ ?>
                    <option value="<?php echo $ticket; ?>"><?php echo $ticket; ?></option> 
    <?php } ?>
        </select>
        <?php
 }
 ?>
 <input class="submit" type="submit" value="Book"  />
</form>
</div>