<?php include 'header2.php';
 include 'config.php';
 session_start();
 $c_email = $_SESSION["c_email"];
 $sql = "SELECT * FROM customer WHERE cemail='$c_email';";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful add account");
if($result->num_rows==1)  {
    while($row = mysqli_fetch_assoc($result)){
        $card_number=$row['card_number'];
        $_SESSION["card_number"]=$card_number;
        }
    }

 ?>
<div id="main-content">
    <h2>Bank Account Details</h2>
    <form class="post-form" action="payment_add_data.php" method="post">
        <div class="form-group">
            <label>Card Number</label>
            <?php echo "$card_number";?>
        </div>
        <div class="form-group">
            <label>Card Holder</label>
            <input type="text" name="card_holder" required/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required/>
        </div>
        <input class="submit" type="submit" value="Pay"  />
    </form>
    <form class="post-form" action="sign_in.php" method="post">
        <input class="submit" type="submit" value="Back"  />
    </form>
</div>
