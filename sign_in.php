<?php include 'header.php';
?>
<div id="main-content">
    <h2>Sign in</h2>
    <form class="post-form" action="signin_accountdata.php" method="post">
	    <div class="form-group">
            <label>Email ID</label>
            <input type="text" name="cemail" required="required">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required="required">
        </div>
        <input class="submit" type="submit" value="Sign in">
    </form>
    <form class="below_login" action="add_account.php" method="post">
        <?php
        echo "Create a new account?";
        ?>
        <input class="submit" type="submit" value="Create account"  />
    </form>

</div>
</div>
</body>
</html>