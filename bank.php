<?php
include 'header3.php';
?>
<div id="main-content">
    <h2>Bank</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM bank";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="10px">
        <thead>
        <th>Card Holder</th>
        <th>Card Number</th>
        <th>Password</th>
        <th>Balance</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['card_holder']; ?></td>
                <td><?php echo $row['card_number']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['balance']; ?></td>
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
