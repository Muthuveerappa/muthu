<?php
include 'header3.php';
?>
<div id="main-content">
    <h2>Account</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM customer";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="10px">
        <thead>
        <th>Email</th>
        <th>Password</th>
        <th>Name</th>
        <th>Address</th>
        <th>Card Holder</th>
        <th>Card Number</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['cemail']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['caddr']; ?></td>
                <td><?php echo $row['card_holder']; ?></td>
                <td><?php echo $row['card_number']; ?></td>
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
