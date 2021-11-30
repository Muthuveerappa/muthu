<?php include 'header2.php';
 include 'config.php'; ?>
<div id="main-content">
    <form class="xpic" align="right" method="post" action="add_flight_choose.php">
        <input type="image" src="resources/x.png" alt="Book ticket" width="20" height="20">
    </form>
    <h2>Change Bank Account Details</h2>
    <form class="post-form" action="change_bank1.php" method="post">
        <div class="form-group">
            <label>Card Holder</label>
            <input type="text" name="card_holder" required/>
        </div>
		
        <div class="form-group">
            <label>Card Number</label>
            <input type="text" name="card_number" required/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required/>
        </div>
        <input class="submit" type="submit" value="Sign up"  />
    </form>
    <form class="post-form" action="add_flight_choose.php" method="post">
        <input class="submit" type="submit" value="Back"  />
    </form>
</div>
</body>
</html>
