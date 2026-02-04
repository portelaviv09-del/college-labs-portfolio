<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php include "header.php"; ?>

        <div class="wrapper-main">
            <selection class="section-default">
		        <h1>Sign up</h1>
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                            echo '<p class="usererror">Fill in all fields</p>';
                        }
                        
                        else if ($_GET["error"] == "invalidusername") {
                            echo '<p class="usererror">Invalid username!</p>';
                        }
                        else if ($_GET["error"] == "passwordcheck") {
                            echo '<p class="usererror">Your passwords do not match!</p>';
                        }
                        else if ($_GET["error"] == "usertaken") {
                            echo '<p class="usererror">Username is already taken!</p>';
                        }
                    }

                ?>

		        <form class="form-signup" action="includes/signup.inc.php" method="post">
                    <label>Username: </label>
			     <input type="text" id="user" name="username" placeholder="Username">
                    <label>Password: </label>
			     <input type="password" id="pass" name="password" placeholder="Password">
                    <label>Repeat Password: </label>
                 <input type="password" id="passwordrepeat" name="passwordRepeat" placeholder="Repeat Password">
			     <button type="submit" id="btn" value="signup-submit" name="signup-submit">Sign Up</button>
		        </form>
                 <p>If you have an account, click here <a href="login.php"> Log In</a>.</p>
            </selection>
        </div>
    <?php include "footer.php"; ?>
</body>
</html>