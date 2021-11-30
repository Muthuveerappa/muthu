<?php

 include 'header.php';
 include 'config.php';
 $c_email = $_POST['cemail'];
 $c_password = $_POST['password'];
 $c_name = $_POST['cname'];
 $c_addr = $_POST['caddr'];
 $end="@gmail.com";
 $valid=1;
 $sql = "SELECT * FROM customer WHERE cemail='$c_email';";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");
 if($result->num_rows==1)  
 {  
    while($row = mysqli_fetch_assoc($result))
    {
        if($row['cemail']==$c_email)
        {
            $valid=0;
        }
    }
}

 function endsWith($string, $endString)
{
    $len = strlen($endString);
    if ($len == 0) {
        return true;
    }
    return (substr($string, -$len) === $endString);
}
$e=endsWith($c_email,$end);
 $elen=strlen($c_email);
 $plen=strlen($c_password);
 $nlen=strlen($c_name);
 $alen=strlen($c_addr);
 if($e==1 && $valid==1 && $elen>=13 && $plen>=10 && $nlen>=3 && $alen>=13)
 {
    session_start();
    $_SESSION["c_email"] = $c_email;
    $_SESSION["c_password"] = $c_password;
    $_SESSION["c_name"] = $c_name;
    $_SESSION["c_addr"] = $c_addr;
    header("Location:add_bank.php");

 }
 else
 {
    ?>
    <div id="main-content">
    <form class="post-form" action="add_account.php" method="post">   
    <?php
    if($e==0)
    {
        echo "<BR>Error:Email does not end with \'@gmail.com\'.";
    }
    if($valid==0)
    {
        echo "<BR>Error:Email already exist.";
    }
    if($elen<13)
    {
        echo "<BR>Error:Email length should be atleast 13.";
    }
    if($plen<10)
    {
        echo "<BR>Error:Password length should be atleast 10.";
    }
    if($nlen<3)
    {
        echo "<BR>Error:Name length should be atleast 3.";
    }
    if($alen<13)
    {
        echo "<BR>Error:Address length should be atleast 13.";
    }
    ?>
    <input class="submit" type="submit" value="Sign up"  />
    </form>
 </div>
 <?php
 }
 
?>
