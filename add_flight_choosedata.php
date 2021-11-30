<?php
 include 'header2.php';
 include 'config.php';
$from = filter_input(INPUT_POST, 'from', FILTER_SANITIZE_STRING);
 $to = filter_input(INPUT_POST, 'to', FILTER_SANITIZE_STRING);
 $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
 $sql ="SELECT * FROM flight WHERE ffrom='$from' AND fto='$to' AND DATE(fdate)='$date';";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");
 ?>
 <div id="word">
    <?php
 echo "From:$from &nbsp;&nbsp;&nbsp; To:$to &nbsp;&nbsp;&nbsp; Date:$date";
 ?>
 </div>
 <?php
 if(mysqli_num_rows($result) > 0)  {
    ?>
    <div id="main-content">
    <table cellpadding="10px">
        <thead>
        <th>Company</th>
        <th>Starting time</th>
        <th>Reaching time</th>
        <th>Flight name</th>
        <th>Travel code</th>
        <th>Price for one ticket</th>
        <th>Booking</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['stime']; ?></td>
                <td><?php echo $row['rtime']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['travelcode']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><button><a href="booking.php?travelcode=<?php echo $row['travelcode']; ?>"><input type="image" src="resources/book_flight.png" alt="Book" width= 100% height= 100%></a></button></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
</div>
 <div id="word">
    <?php
     }else{
    echo "<h2>No Flights Found</h2>";
  }
   ?>
 </div>