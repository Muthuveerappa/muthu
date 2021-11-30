<?php
           include 'config.php';
           include 'header.php';
           session_start();
   
        $cemail=$_POST['cemail'];
        $password=$_POST['password'];
        $sql = "SELECT * FROM customer WHERE cemail='$cemail';";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");
        
        if($result->num_rows>0)  { 
        while($row = mysqli_fetch_assoc($result)){ 
            if($row['cemail']==$cemail){ 
            if($row['password']==$password) {
                $_SESSION['c_email'] = $cemail;
                $_SESSION['c_password'] = $password;
                session_destroy();
                header("location: add_cemail.php?cemail=$cemail");
            }
        }
    }
}
        else {
            ?>
            <form class="post-form" action="sign_in.php" method="post">
            <?php
        echo "alert('WRONG INFORMATION')";
        ?>
        <input class="submit" type="submit" value="Sign in"  />
    </form>
      <?php  
    }





            
    /*
function test_input($data) {
      
    $data = trim($data); $data = stripslashes($data); $data = htmlspecialchars
    ($data); return $data; } session_start(); if(isset($_POST['submit']))
    { extract($_POST); include 'config.php'; $sql=mysqli_query
    ($conn,"SELECT * FROM customer"); $row  = mysqli_fetch_array($sql); if
    (is_array($row)){ $_SESSION["cemail"] = $row['cemail']; $_SESSION
    ["password"]=$row['password']; header("Location: index.php"); } else
    { echo "alert('WRONG INFORMATION')"; die(); } }

$conn = mysqli_connect("localhost","root","","onlineticketbooking") or die("Connection Failed");
if ($_SERVER["REQUEST_METHOD"]== "POST") {
  $c_email = test_input($_POST["cemail"]);
    $password = test_input($_POST["password"]);
    $sql = "Select * FROM customer";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");


$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    $stmt = $conn->prepare("SELECT * FROM customer");
    $stmt->execute();
    $users = $stmt->fetchAll();

*/
?>