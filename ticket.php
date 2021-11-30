<?php
include 'header3.php';
?>
<div id="main-content">
    <h2>Ticket</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM ticket";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="10px">
        <thead>
        <th>Email</th>
        <th>Travel Code</th>
        <th>Ticket</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['cemail']; ?></td>
                <td><?php echo $row['travelcode']; ?></td>
                <td><?php echo $row['ticket']; ?></td>
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
