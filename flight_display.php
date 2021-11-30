<?php
include 'header3.php';
include 'config.php';
?>
<div id="main-content">
    <h2>Flight</h2>
    <?php
      $sql = "SELECT * FROM flight";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="10px">
        <thead>
        <th>From</th>
        <th>To</th>
        <th>Date</th>
        <th>Company</th>
        <th>Starting time</th>
        <th>Reaching time</th>
        <th>Flight name</th>
        <th>Travel code</th>
        <th>Price</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['ffrom']; ?></td>
                <td><?php echo $row['fto']; ?></td>
                <td><?php echo $row['fdate']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['stime']; ?></td>
                <td><?php echo $row['rtime']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['travelcode']; ?></td>
                <td><?php echo $row['price']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>
