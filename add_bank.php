<?php include 'header.php';
 include 'config.php'; ?>
<div id="main-content">
    <h2>Bank Account Details</h2>
    <form class="post-form" action="add_bankdata.php" method="post">
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
    <form class="post-form" action="sign_in.php" method="post">
        <input class="submit" type="submit" value="Back"  />
    </form>
</div>
</body>
</html>
