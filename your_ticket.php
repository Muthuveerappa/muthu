<?php 
include 'header2.php'; 
include 'config.php';
session_start();
 $c_email = $_SESSION["c_email"];
 $date=strtotime("Today");
 $today=date("Y-m-d", $date);
 $sql = "SELECT * FROM ticket t,flight f WHERE t.cemail='$c_email' AND DATE(f.fdate)='$today' AND f.travelcode=t.travelcode ORDER BY f.fdate ;";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");

if($result->num_rows>0)
{
?>

<div id="main-content">
    <div id="yourticket">
    <h2><img src="resources/airplane2.png" height= "70" width= "150"/>Your Today's Travel Plan<img src="resources/airplane2.png" height= "70" width= "150"/></h2></div>
    <table cellpadding="10px">
        <thead>
        <th>Company</th>
        <th>Date</th>
        <th>Starting time</th>
        <th>Reaching time</th>
        <th>Flight name</th>
        <th>Travel code</th>
        <th>Price for one ticket</th>
        <th>Ticket</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['fdate']; ?></td>
                <td><?php echo $row['stime']; ?></td>
                <td><?php echo $row['rtime']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['travelcode']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['ticket']; ?></td>                
            </tr>
          <?php } ?>
        </tbody>
    </table>
</div>
<?php
}


$sql = "SELECT * FROM ticket t,flight f WHERE t.cemail='$c_email' AND DATE(f.fdate)>'$today' AND f.travelcode=t.travelcode ORDER BY f.fdate ;";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");


if($result->num_rows>0)
{
?>
<div id="main-content">
    <div id="yourticket">
    <?php
    echo "<h2>Your Future Travel Plan</h2>";
   ?>
</div>
    <table cellpadding="10px">
        <thead>
        <th>Company</th>
        <th>Date</th>
        <th>Starting time</th>
        <th>Reaching time</th>
        <th>Flight name</th>
        <th>Travel code</th>
        <th>Price for one ticket</th>
        <th>Ticket</th>
        <th>Cancel</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['fdate']; ?></td>
                <td><?php echo $row['stime']; ?></td>
                <td><?php echo $row['rtime']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['travelcode']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['ticket']; ?></td>
                <td><button><a class="text-white" href="your_ticket_cancel.php?travelcode=<?php echo $row['travelcode'];?>&amp;ticket=<?php echo $row['ticket'];?>">Cancel</a></button></td>

                

            </tr>
          <?php } ?>
        </tbody>
    </table>
</div>
<?php
}


$sql = "SELECT * FROM ticket t,flight f WHERE t.cemail='$c_email' AND DATE(f.fdate)<'$today' AND f.travelcode=t.travelcode ORDER BY f.fdate ;";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");


if($result->num_rows>0)
{
?>
<div id="main-content">
    <div id="yourticket">
    <?php
    echo "<h2>Your History</h2>";
   ?>
</div>
    <table cellpadding="10px">
        <thead>
        <th>Company</th>
        <th>Date</th>
        <th>Starting time</th>
        <th>Reaching time</th>
        <th>Flight name</th>
        <th>Travel code</th>
        <th>Price for one ticket</th>
        <th>Ticket</th>
        <th>Delete</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['fdate']; ?></td>
                <td><?php echo $row['stime']; ?></td>
                <td><?php echo $row['rtime']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['travelcode']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['ticket']; ?></td>
                
                <td><form align="right" method="post" action="your_ticket_delete.php?travelcode=<?php echo $row['travelcode'];?>&amp;ticket=<?php echo $row['ticket'];?>">
            <input class="delete" type="submit" value="Delete">
        </form>
    </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
</div>
<?php
}
?>


