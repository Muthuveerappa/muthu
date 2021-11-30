<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Create Account</h2>
    <form class="post-form" action="add_accountdata.php" method="post">
	    <div class="form-group">
            <label>Email ID</label>
            <input type="text" name="cemail" required/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required/>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="cname" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="caddr" required/>
        </div>
        <input class="submit" type="submit" value="Sign up"  />
    </form>
    <form class="post-form" action="sign_in.php" method="post">
        <?php
        echo "Already have an account?";
        ?>
        <input class="submit" type="submit" value="Sign in"  />
    </form>
</div>
</body>
</html>
