<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php include "header.php"; ?>
       <div class="wrapper-main">
            <selection class="section-default">
		        <h1>Log in</h1>	
                                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "error_emptyfields") {
                            echo '<p class="usererror">Fill in all fields</p>';
                        }
                        
                        else if ($_GET["error"] == "error_doesnotexist") {
                            echo '<p class="usererror">Invalid username!</p>';
                        }
                        else if ($_GET["error"] == "wrongpw") {
                            echo '<p class="usererror">Your passwords do not match!</p>';
                        }
                    }

                ?>	
		        <form class="form-login" action="includes/login.inc.php" method="post">
                    <label>Username: </label>
			     <input type="text" id="user" name="username" placeholder="Username">
                    <label>Password: </label>
			     <input type="password" id="pass" name="password" placeholder="Password">
			     <button type="submit" id="btn" value="login-submit" name="login-submit">Log In</button>
		        </form>
                <p>If you don't have an account, click here <a href="signup.php"> Sign Up</a>.</p>
            </selection>
        </div>
	<?php include "footer.php"; ?>
</body>
</html>