<?php
include 'header.php';
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
    $c_password = $_SESSION["c_password"];
    $c_name = $_SESSION["c_name"];
    $c_addr = $_SESSION["c_addr"];
        
        $sql = "INSERT INTO customer(cemail,password,cname,caddr,card_holder,card_number) VALUES ('$c_email','$c_password','$c_name','$c_addr','$b_card_holder','$b_card_number')";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful add account");
        session_destroy();
        header("location: add_cemail.php?cemail=$c_email");
        
        
    }
}
}
  else
  {  
?>
<form class="post-form" action="add_bank.php" method="post">
        <?php
        echo "Error:Bank details";
        ?>
        <input class="submit" type="submit" value="Retry"  />
    </form>
<?php
}

?>
