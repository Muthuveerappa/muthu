<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
 <?php
 /* <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"> */
 ?>
 <?php /* <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
*/
?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>onlineticketbooking</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <form align="right" method="post" action="log_out.php">
            <input class="logout" type="submit" value="Log out">
        </form>
        <form class="profile" align="right" method="post" action="change_bank1.php">
            <input type="image" src="resources/profilepic.jpg" alt="Submit" width="48" height="48">
        </form>
        <div id="header">
            <h1><img src="resources/Air_India.png" height= "150" width= "600"/></h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="add_flight_choose.php">Booking</a>
                </li>
                <li>
                    <a href="your_ticket.php">Your Tickets</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>