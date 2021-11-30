<?php
include 'header2.php';
 include 'config.php';
 $b_card_holder = $_POST['card_holder'];
 $b_card_number = $_POST['card_number'];
 $b_password = $_POST['password'];
$sql = "SELECT * FROM bank WHERE card_number='$c_card_number';";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful add account");
if($result->num_rows==1)  {
    while($row = mysqli_fetch_assoc($result)){ 
    if($row['password']==$b_password) 
    {
        session_start();
        $c_email = $_SESSION["c_email"];
        UPDATE customer SET card_holder='{$b_card_holder}' AND card_number='{$b_card_number}' WHERE cemail='$c_email';
        $sql = "UPDATE customer SET card_holder='{$b_card_holder}' AND card_number='{$b_card_number}' WHERE cemail='$c_email'";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful add account");
        header("location: add_flight_choose.php");
        
        
    }
}
}
  else
  {  
?>
<form class="post-form" action="change_bank1.php" method="post">
        <?php
        echo "Error:Bank details";
        ?>
        <input class="submit" type="submit" value="Retry"  />
    </form>
<?php
}

?>
